<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function index()
	{
		$this->load->view('vw_cadastro');
	}

	public function cadastrarUser()
	{
		$data = [
			'tipoUser' => $this->input->post('')
		];
	}
}