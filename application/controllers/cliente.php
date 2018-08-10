<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	
	public function formularioCte()
	{
        $this->load->helper('url');
		$this->load->view('formularioCte');
	}
        
        public function InicioCliente()
	{
		$this->load->helper('url'); //Instaciamos url's dinamicos//

		//Recuperamos datos del formulario//
		$nombre =$this->input->POST('nombre');
		$dui = $this->input->post('numero_dui');
		$nit = $this->input->post('numero_nit');
		//---------------------------------------------

        //Llamamos al modelo//
		$this->load->model('Cliente_model', 'CM', true);
		$data=array(
			'nombre'=>$nombre,
			'numero_dui'=>$dui,
			'numero_nit'=>$nit,
		);

		//Utilizamos metodo del modelo//
		$resultado=$this->CM->insertarCliente($data);
		if ($resultado==1) {
            $this->load->view('mensaje');
		}
		else
		{
			$this->indexCte();
		}

		//$this->load->view('mensaje');
	}
}