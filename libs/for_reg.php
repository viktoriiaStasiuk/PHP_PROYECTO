<!DOCTYPE html>
<html lang="es">
<head>
	<title>Next Travel</title>
	<meta charset="utf-8" />
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



	<form class="registro" method="post">
		<input type="hidden" id="flag" name="flag" value="false" />
                
        <h1>Registration</h1>
        
        <label>Name: </label>
        <input type="text" name="nom" value="<?= $nom ?>" maxlength="50" required placeholder="Nombre"/><br/>
        <label>Surname: </label>
        <input type="text" name="ape" value="<?= $ape ?>" maxlength="50" required placeholder="Apellidos"/>
        <br/>
        <label>Username: </label>
        <input type="text" name="usr" value="<?= $usr ?>" required placeholder="Usuario"/>
        <br/>
        <label>Password: </label>
        <input type="password" name="pwd" required="<?= $pwd ?>" placeholder="Contraseña"/>
        <br/>
        <label>Email: </label>
        <input type="email" name="ema" value="<?= $ema ?>" required placeholder="Email"/>

        <br/>
        <br/>
        <button type="submit" >Register</button>
    </form>
            </div>
</section>
</body>
</html>