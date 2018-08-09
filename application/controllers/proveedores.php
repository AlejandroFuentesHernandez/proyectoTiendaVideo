<?php
define('BASEPATH') OR exit('No direct scrip access allowed');
class Proveedores extends CI_Controller{

	public function indexCte()
	{
		$this->load->helper('url');
		$this->load->view('indexProv');
	}
	public function InicioProveedor(){
		$this->load->helper('url');//instaciamos url's dinamicos
		//recperamos datos del formulario
		$Nombre_empresa=$this->input->POST('Nombre_empresa');
		$tipo_empresa=$this->input->POST('$tipo_empresa');
		$representante_empresa=$this->input->POST('$representante_empresa');
		$contacto_proveedor=$this->input->POST('contacto_proveedor');
		//-------------------------------------------------
		//Llamamos al modelo
		$this->load->model('Proveedores_model','PM',true);
		$data=array('Nombre_empresa'=>$Nombre_empresa,
			'tipo_empresa'=>$tipo_empresa,
			'representante_empresa'=>$representante_empresa,
			'contacto_proveedor'=>$contacto_proveedor,
		);
		//utilizamos metodo del modelo
		$resultado=$this->PM->insertarProveedores($data);
		if($resultado==1)
		{
			$this->load->view('mensaje_proveedor');
		}else{
			$this->indexCte();
		}
		//$this->load->view('mensaje_proveedor');
	}

	//
}
?>