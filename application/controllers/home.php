<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function login()
	{
		$this->load->view('login/login');
	}

	public function acerca_de()
	{
		$this->session->set_userdata('usuario','Alexander Leon');
		$data['contenido'] = 'home/acerca_de';
		$data['titulo'] = 'Acerca De';
		$this->load->view('template',$data);
	}

	public function index()
	{
		$data['contenido'] = 'home/index';
		$data['titulo'] = 'Index';
		$this->load->view('template',$data);
	}

	public function acceso_denegado()
	{
		$data['contenido'] = 'home/acceso_denegado';
		$data['titulo'] = 'Denegado';
		$this->load->view('template',$data);
	}

	public function salir()
	{
		$this->session->sess_destroy();
		redirect('home/login');
	}

}
