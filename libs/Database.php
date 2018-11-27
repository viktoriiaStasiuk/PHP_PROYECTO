<?php

	class Database {

		private $dbHost = "localhost" ;
		private $dbUser = "root" ;
		private $dbPass = "" ;
		private $dbName = "travel" ;

		private static $res ;

		private static $instancia = null ;	
		private static $db ;				
		private function __construct()  
		{
			$this->conectar() ;
		}
		
		public function __destruct() 
		{	
			
			Database::$db->close() ;
		}

		private function __clone() { }

		public function __wakeup() 
		{
			$this->conectar() ;
		}

		public static function getInstancia() 
		{
			if (is_null(self::$instancia)):
				self::$instancia = new Database() ;
			endif ;
			
			return self::$instancia ;
		}

		public function consulta($sql):bool 
		{
			
			self::$res = self::$db->query($sql) 
						  or die ("**Se ha producido un error de consulta en la base de datos.") ;

			if (is_object(self::$res)) return (self::$res->num_rows > 0) ;
			else
				return (self::$db->affected_rows > 0) ;
		}

		public function getTours($class="StdClass")
		{
			return self::$res->fetch_all($class) ;
		}

		private function conectar() 
		{
			
			self::$db = new mysqli($this->dbHost, 
								   $this->dbUser, 
								   $this->dbPass)
							or die("**Se ha producido un error en la conexión con el motor de bases de datos.") ;

			
			self::$db->select_db($this->dbName) ;

			self::$db->set_charset("utf8") ;
		}


	}





