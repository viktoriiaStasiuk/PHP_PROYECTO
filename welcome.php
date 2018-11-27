<?php

include 'settings.php';

?>
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
 
<div class="nav">
    <div class="uno">Next travel</div> 
    <div class="dos">
           <a href="travel.php">HOME</a>&#160; &#160; 
           <a href="">CONTACT</a> &#160; &#160;
           <a href="crud.php">CRUD</a>
    </div> 
</div>


    <div class="tres">
        
        <a href="logout.php">Log out</a> 
        
</div>

<p class="tit">Tours</p>

<?php
            require_once("libs/Database.php") ;

            Database::getInstancia();

            $sql = "SELECT * FROM tours;";
            $res = Database::consulta($sql);
            $tours = Database::getTours($res);
            
            foreach($tours as $item):

?>
                <article style="width: 380px;
                                background-color: rgb(205,219,241);
                                box-shadow: 0px 0px 12px 1px rgba(0,0,0,0.4);
                                margin: 50px;
                                padding: 50px;
                                display: inline-flex;
                                flex-direction: column; 
                                position: relative;
                                text-align: center;">
                    <h2><?= $item["nombre"] ?></h2>
                    <img src="<?= $item["foto"] ?>" /></p>
                    <a>Dates: <?= $item["fecha_inicio"] ?></a>
                    <a> / <?= $item["fecha_fin"] ?></a> 
                    <a href="<?= $item["descripcion"] ?>"/>View details »</a>   

                </article>
<?php 
            endforeach ;
?>


			<div id="content" class="row" style="margin-top:20px;" data-page="0">
			</div> 

		
        <footer>
        </footer>