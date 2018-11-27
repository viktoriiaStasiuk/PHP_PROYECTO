<?php

  $nom = $_POST["nom"]??"" ;
  $ape = $_POST["ape"]??"" ;
  $usr = $_POST["usr"]??"" ;
  $ema = $_POST["ema"]??"" ;

  $lnk = new mysqli("localhost","root","") 
      or  die("**Error de conexión: $lnk->connection_errno : $lnk->connection_error") ;

  $lnk->select_db("travel") ;

  $lnk->set_charset("utf8") ;

  if (isset($_POST["flag"]) && ($_POST["flag"]==="false")):

    $pwd = md5($_POST["pwd"]) ;

    $sql = "INSERT INTO usuario
          (usuario,password,email,nombre,apellidos) VALUES
          ('$usr','$pwd','$ema','$nom','$ape') ;" ;

      if ($lnk->query(rtrim($sql,","))):

        header("location: welcome.php");

      else:
        $err = "Error" ;
        require_once("libs/for_reg.php") ;
      endif ;
      
    else :
      $err = "Error" ;
      require_once("libs/for_reg.php") ;
    endif ;

  $lnk->close() ;
