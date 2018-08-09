<?php
define('BASEPATH') OR exit('No direct scrip access allowed');
class Proveedores extends CI_Controller{

	public function indexCte()
	{
		$this->load->helper('url');
		$this->load->view('indexProv');
	}
	public function InicioProveedor(){
		$this->load-helper('url');//instaciamos url's dinamicos
		//recperamos datos del formulario
		$Nombreproveedor=$this->input->POST('Nombreproveedor');
		$tipodempresa=$this->input->POST('$tipodempresa');
		$representante=$this->input->POST('$representante');
		$tipocontacto=$this->input->POST('tipocontacto');
		//-------------------------------------------------
		//Llamamos al modelo
		$this->load->model('Proveedores_model','PM',true);
		$data=array('Nombreproveedor'=>$Nombreproveedor,
			'tipodempresa'=>$representante,
			'tipocontacto'=>$tipocontacto,
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
}
?>