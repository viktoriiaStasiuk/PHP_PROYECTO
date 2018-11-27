 <?php

	try {
	$pdo = new PDO("mysql:host=localhost; dbname=travel; charset=utf8", "root", "", 
					   [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"])  ;

	} catch (PDOException $error) {
		echo $error->getMessage() ;
	}

	$trip_url = "https://api.sygictraveldata.com/1.1/en/trips/templates?parent_place_id=city:5" ;

	$opcions = [ "https" => [ "method" => "GET", 
	                          "header" => "x-api-key: 6GTrwaa0yVrSUuGIB9As3kAF1GYysRkaTVkcQZ2j" ] ] ;

	$contexto = stream_context_create($opcions) ;

	$tours = json_decode(file_get_contents($trip_url, false, $contexto)) ;

	$trip_query  = "INSERT INTO tours (idTour, nombre, descripcion, fecha_inicio, fecha_fin)
		     		VALUES (:idTour, :nombre, :descripcion, :fecha_inicio, :fecha_fin) " ;

	$sqlp = $pdo->prepare($trip_query) ;
	
	foreach ($tours->data->trips as $item):

		$sqlp->bindValue(":idTour",       $item->id) ;
		$sqlp->bindValue(":nombre",       $item->name) ;
		$sqlp->bindValue(":descripcion",  $item->url) ;
		$sqlp->bindValue(":fecha_inicio", $item->starts_on) ;
		$sqlp->bindValue(":fecha_fin",    $item->ends_on) ;

		$sqlp->execute() ;
	

	endforeach ;
	
	
?>
