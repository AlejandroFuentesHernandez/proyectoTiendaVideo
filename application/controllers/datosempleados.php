<?php
define('BASEPATH') OR exit('No direct scrip access allowed');
class Datosempleados extends CI_Controller{
	public function indexDatempl(){
		$this->load->helper('url');
		$this->load->view('indexDatempl');
	}
	public function InicioDatempl(){
		$this->load->helper('url');//instaciamos url's dinamicos
		//recperamos datos del formulario
		$numero_empleado=$this->input->POST('numero_empleado');
		$nombre_empleado=$this->input->POST('nombre_empleado');
		$DUI_empleado=$this->input->POST('DUI_empleado');
		$direccion_empleado=$this->input->POST('direccion_empleado');
		$fecha_nacimiento=$this->input->POST('fecha_nacimiento');
		$cargo_empleado=$this->input->POST('cargo_empleado');
		$telefono_empleado=$this->input->POST('telefono_empleado');
		//----------------------------------------------------
		//Llamamos al modelo
		$this->load->model('Datosempleados_model','DM',true);
		$data=array('numero_empleado'=>$numero_empleado,
			'nombre_empleado'=>$nombre_empleado,
			'DUI_empleado'=>$DUI_empleado,
			'fecha_nacimiento'=>$fecha_nacimiento,
			'cargo_empleado'=>$cargo_empleado,
			'telefono_empleado'=>$telefono_empleado
	);
		//utilizamos metodo del modelo
		$resultado=$this->DM->insertarDatosempleados($data);
		if($resultado==1){
			$this->load->view('mensaje_datosempleados');
		}else{
			$this->indexDatempl();
		}
		//$this->load->view('mensaje');
	}
}