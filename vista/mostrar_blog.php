<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Gluten&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <?php 
    include("../modelo/manejo_objetos.php");
    try{
        $b=1;
        $n=100;
        $m=200;
        $k=300;
        $miconexion=new PDO('mysql:host=localhost;dbname=pruebas','root','');
        $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $Manejo_Objetos=new Manejo_Objetos($miconexion);
        $tabla_blog=$Manejo_Objetos->getContenidoPorFecha();
        echo "<div class='container_header'><h1>EL BLOG DE DAN</h1></div>";
        if(empty($tabla_blog)){
            echo "No hay entradas de blog aun";
        }else{
            foreach($tabla_blog as $valor){
                echo "<br><br><div class='container_article'>";
                echo "<div class='container_link'><h4>" . $valor->getFecha() . "</h4>";
                echo "<div class='comment' style='width:900px'><h3>" . $valor->getTitulo() . "</h3><p><span id='" . $n . "'>";
                echo "Detalles...</span><span id='" . $m . "'>";
                echo $valor->getComentario() . "</span></p><button onclick='myFunction" . $b ."()' id='" . $k . "'>Read more</button></div>";
                $b++;
                $n++;
                $m++;
                $k++;
                if($valor->getImagen()!=""){
                    echo "<div class='image'><a href='articles/blog_estres.php'> <img src='../imagenes/";
                    echo $valor->getImagen() . "' width='400px' height='400px'/></a></div></div></div>";
                }
                echo "<hr/>";
            }
        }
    }catch(Exception $e){
        die("Error: " . $e->getMessage());
    }
    ?>
    <br/>
    <a href="formulario.php">Volver a la pagina de insercion </a>
    
    <footer>
        <nav class="footer">
            <ul class="footer_nav">
                <li><div><span></span></div></li>
                <li><a href="#">Aviso legal</a></li>
                <li><a href="#">DMCA</a></li>
                <li><a href="#">EL BLOG DE DAN</a></li>
                <li><a href="#">EL BLOG DE DAN ONLINE</a></li>
            </ul>
        </nav>
        <p id="footer_p">c 2021 El blog de Dan, Todos los derechos reservados.hay 5437 disponibles</p>
    </footer> 
    <script src="script.js"> </script>
</body>
</html>