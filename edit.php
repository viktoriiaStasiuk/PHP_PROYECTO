<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">


</head>

<body>
  <div class="nav">
    <div class="uno">Next travel</div> 
    <div class="dos">
           <a href="travel.php">HOME</a>&#160; &#160; 
           <a href="">CONTACT</a> &#160; &#160;
           <a href="crud.php">CRUD</a>
    </div> 
</div>

<h1>UPDATE</h1>

<?php

include("conexion.php");

if(!isset($_POST["bot_actualizar"])){

    $idTour = $_GET["idTour"];
    $nom    = $_GET["nom"];
    $ini    = $_GET["ini"];
    $fin    = $_GET["fin"];

  }else{

    $idTour = $_POST["id"];
    $nom    = $_POST["nom"];
    $ini    = $_POST["ini"];
    $fin    = $_POST["fin"];

    $sql="UPDATE tours SET nombre=:nomb, fecha_inicio=:fecha_in, fecha_fin=:fecha_f WHERE idTour=:idT";

    $resultado=$base->prepare($sql);
    $resultado->execute(array(":idT"=>$idTour, ":nomb"=>$nom, ":fecha_in"=>$ini, ":fecha_f"=>$fin));

    header("Location: crud.php");

  }
?>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $idTour ?>"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $nom ?>"></td>
    </tr>
    <tr>
      <td>Fecha de inicio</td>
      <td><label for="ini"></label>
      <input type="date" name="ini" id="ini" value="<?php echo $ini ?>"></td>
    </tr>
    <tr>
      <td>Fecha de fin</td>
      <td><label for="fin"></label>
      <input type="date" name="fin" id="fin" value="<?php echo $fin ?>"></td>
    </tr>
    <tr>
      <td colspan="4"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Update"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>