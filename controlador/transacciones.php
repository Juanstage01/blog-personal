<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 
    include_once("../modelo/objeto_blog.php");
    include_once("../modelo/manejo_objetos.php");
try{
        $miconexion=new PDO('mysql:host=localhost;dbname=pruebas','root','');
        $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    if($_FILES['imagen']['error']){
        switch($_FILES['imagen']['error']){
            case 1: echo "El tamaño del archivo excede lo pedido por el servidor";
                break;
            case 2: echo "El tamaño del archivo excede 2 MB"; //
                break;
            case 3: echo "El envio de archivo se interrumpio"; //corrupcion de archivo
                break;
            case 4: echo "No se ha enviado archivo alguno";
                break;
        }
    }else{
        echo "Entrada subida correctamente<br>";
        if(isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']==UPLOAD_ERR_OK)){
            $destino_de_ruta="../imagenes/";
            move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta . $_FILES['imagen']['name']);
            echo "El archivo " . $_FILES['imagen']['name'] . " Se ha copiado en el directrio de imagenes";

        }else{
            echo "El archivo no se ha podido copiar al direccion de imagenes";
        }
    }
$Manejo_Objetos=new Manejo_Objetos($miconexion);
$blog=new Objeto_Blog();
$blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]), ENT_QUOTES));
$blog->setFecha(Date("Y-m-d H:i:s"));
// $blog->setDescripcion(htmlentities(addslashes($_POST["area_descripcion"]), ENT_QUOTES));
$blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]), ENT_QUOTES));
$blog->setImagen($_FILES["imagen"]["name"]);
$Manejo_Objetos->insertaContenido($blog);
echo "<br/> Entrada de blog con exito <br/>";

}catch(Exception $e){
    die("\n Error: " . $e->getMessage());
} 
   
?>
</body>
</html>