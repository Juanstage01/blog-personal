<!doctype html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Gluten&display=swap" rel="stylesheet">
<meta charset="utf-8">
<title>Create Blog</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<h2>Nueva entrada</h2>

<form action="../controlador/transacciones.php" method="post" enctype="multipart/form-data" name="form1">
  <table>
  <tr>
  <td><p>Título:</p> 
    <label for="campo_titulo"></label></td>
  <td><input type="text" id="campo_titulo" name="campo_titulo" ></td>
  
  
  </tr>
  <tr><td><p>Comentarios:</p>
    <label for="area_comentarios"></label></td>
    <td><textarea name="area_comentarios" id="area_comentarios" rows="10" cols="50"></textarea></td>
  </tr>
    <input type="hidden" name="MAX_TAM" value="2097152">

  <tr><td><p>Descripcion</p>
    <label for="area_descripcion"></label></td>
    <td><input type="text" name="area_descripcion" id="area_descripcion" ></input></td>
  </tr>

  <tr>
  <td id="size_file" colspan="2" align="center">Seleccione una imagen con tamaño inferior a 2 MB</td></tr>
  <tr>
    <td colspan="2" align="left"><input type="file" name="imagen" id="imagen"></td>
    </tr>
    <tr>
    <td colspan="2" align="center">  
    <input type="submit" name="btn_enviar" id="btn_enviar" value="Enviar"></td></tr>
  <tr><td colspan="2" align="center"><a href="Mostrar Blog.php">Página de visualización del blog</a></td></tr>  
  </table>
</form>
<p>&nbsp;</p>

</body>
</html>