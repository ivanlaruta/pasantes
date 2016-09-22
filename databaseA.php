<?php

	function llamada2(){
	return $entrada = array("localhost","bd_gestion_activos","root","");
	 
	}
	
	
	function execSqlA($sql){
		$vect = llamada2();
		$cnn=new clsConexion2($vect[0],$vect[1],$vect[2],$vect[3]);
		return $cnn->executeSQL($sql);
	}
	
        function RecuperarIdItemA($Tabla_BD, $TipoId, $ValorId){
		$TablaId = selectA($Tabla_BD, $TipoId, $ValorId);
		$Item = mysqli_fetch_array($TablaId);
		if($Item)
		{return $Item;
		}else{
		return false;
		}
	}
	
	class clsConexion2{
		private $db;
		private $server; 
		private $usr;
		private $psw;
		
		private $cxn='';
		
		function __construct($serveri,$dbi,$usri,$pswi) {
		$this->server = $serveri;
		$this->usr = $usri;
		$this->psw = $pswi;
		$this->db= $dbi;
		}
			
		
		private function conectar(){
			$this->cxn=mysqli_connect($this->server,$this->usr,$this->psw);
			if($this->cxn){
				return true;
			}else{
				echo 'Se ha producido el siguiente error al intentar acceder a la base de datos: '.mysql_connect_error();
				return false;
			}
		}
		
		public function executeSQL($query){
			$tabla_consulta=NULL;
			if($this->conectar()){
				mysqli_select_db($this->cxn,$this->db);
				$tabla_consulta=mysqli_query($this->cxn,$query);
			}
			return $tabla_consulta;
		}	
	}

?>