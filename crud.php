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
           <a href="welcome.php">TOURS</a>&#160; &#160; 
           <a href="">CONTACT</a> &#160; &#160;
           <a href="crud.php">CRUD</a>
    </div> 
</div>
<?php
include("conexion.php");

          $registros=$base->query("SELECT * FROM tours")->fetchAll(PDO::FETCH_OBJ);

          if(isset($_POST["in"])){
            $idTour       =$_POST["Id"];
            $nombre       =$_POST["Nom"];
            $fecha_inicio =$_POST["Ini"];
            $fecha_fin    =$_POST["Fin"];

            $sql = "INSERT INTO tours (idTour, nombre, fecha_inicio, fecha_fin) VALUES(:idTour, :nombre, :fecha_inicio, :fecha_fin)";

            $res = $base->prepare($sql);
            $res->execute(array(":idTour"=>$idTour, ":nombre"=>$nombre, ":fecha_inicio"=>$fecha_inicio, ":fecha_fin"=>$fecha_fin));

            header("Location:crud.php");
          }
?>

<h1>CRUD</h1>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">

  <table width="50%" align="center">
    <tr >
      <td>Id</td>
      <td>Name</td>
      <td>Start date</td>
      <td>End date</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr> 
   <?php  
      foreach ($registros as $item) :?>
		
   	<tr>
      <td><?php echo $item->idTour ?></td>
      <td><?php echo $item->nombre ?></td>
      <td><?php echo $item->fecha_inicio ?></td>
      <td><?php echo $item->fecha_fin ?></td>
 
      <td class="bot"><a href="delete.php?idTour=<?php echo $item->idTour ?>"><input type='button' name='del' id='del' value='Delete'></a></td>
      <td class='bot'><a href="edit.php?idTour=<?php echo $item->idTour ?> & nom=<?php echo $item->nombre ?> & ini=<?php echo $item->fecha_inicio ?>& fin=<?php echo $item->fecha_fin ?>"><input type='button' name='up' id='up' value='Update'></a></td>
    </tr>   

<?php endforeach;
?>

	<tr>
	<td></td>
      <td><input type='number' name='Id' class='centrado'></td>
      <td><input type='text' name='Nom' class='centrado'></td>
      <td><input type='date' name='Ini' class='centrado'></td>
      <td><input type='date' name='Fin' class='centrado'></td>
      <td class='bot'><input type='submit' name='in' id='in' value='Insertar'></td></tr>    
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>