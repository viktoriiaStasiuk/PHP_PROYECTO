<?php
    require('coneccion.php');
    
    session_start();
    
    if(!empty($_POST))
    {
        $usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
        $password = mysqli_real_escape_string($mysqli,$_POST['password']);
        $error = '';
        
        $pass = MD5($password);
        
        $sql = "SELECT idUsuario FROM usuario WHERE usuario = '$usuario' AND password = '$pass'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['id_usuario'] = $row['idUsuario'];
            
            header("location: welcome.php");
            } else {
            $error = "Username or password are wrong";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Next Travel</title>
        <link href="https://fonts.googleapis.com/css?family=Seaweed+Script" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />


    </head>
    <body>

<section class="capaUno"> 
<div class="nav">
    <div class="uno">Next travel</div> 
    <div class="dos">
           <a href="travel.php">HOME</a>&#160; &#160; 
           <a href="">CONTACT</a> 
    </div> 
</div> 
<header class="fondo">
        <section class="capaUno"> 
<div class="tres">
        <a href="registrarse.php">Sign Up</a> 
        <?php
                if (isset($_GET["exito"])):
                    echo "El registro se ha producido correctamente" ;
                endif ;
            ?>
</div>
<header class="fondo">
        <form method="post" action="">
        
            <div class="login">
                <h1>Login</h1>
                <form method="post">
                    Username<input type="text" name="usuario" placeholder="Usuario" required="required" /><br/>
                    Password<input type="password" name="password" placeholder="Contaseña" required="required" /><br/>
                <button type="submit" href="" class="" >Login</button>
                <div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
                </form>
            </div>   

</header>
</section>
         
    </body>
</html>