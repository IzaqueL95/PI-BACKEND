<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ValidarAcessoModel');
        date_default_timezone_set('America/Sao_Paulo');
	}

	public function index()
	{
		$this->load->view('vw_login');
	}

	public function Logar()
	{

		$jsonStatus[] = [
			'status' => '',
			'msg' => ''
		];


		$dataUser = [
			'userEmail' => $this->input->post('user_email'),
			'userPass'  => $this->input->post('user_pass') 
		];


		if(!isset($dataUser['userEmail']) || !isset($dataUser['userPass'])){
			$jsonStatus = [
				'status' => 'EROR',
				'msg' => 'Usuario ou senha não preencidos!'
			];

			echo json_encode($jsonStatus);
		}

		$response = $this->ValidarAcessoModel->validarAcesso($dataUser);

		echo json_encode($response);
	}
}
