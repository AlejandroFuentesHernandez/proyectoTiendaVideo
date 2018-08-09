<?php
function__construct(){
	//parent::__construct();
	$this->load->database();
}
//Creamos la insercion de datos a una tabla
class Datosempleado_model extends CI_model{//Inicio de Insercion
	public function insertarDatosempleado($data){
		$x=$this->bd->insert('datosempleado',$data);
		if($x==true){
			return 1;
		}
		else{
			return =0;
		}
	}
}//fin de consulta
?>