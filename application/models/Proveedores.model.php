<?php
function__construct(){
	//parent::__construct();
	$this->load->database();
}
//Creamos la insercion de datos a una tabla
class Proveedores_model extends CI_Model{//Inicio de Insercion
public function insertarProveedores($data)
{
	$x=$this->db->insert('proveedores',$data);
	if($x==true)
	{
		return 1;
	}
	else{
		return 0;
	}
}
}//fin de consulta
?>