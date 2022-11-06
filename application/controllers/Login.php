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

		$dataUser = [
			'userEmail' => $this->input->post('email'),
			'userPass'  => $this->input->post('senha') 
		];

		// var_dump($dataUser);
		// if(!isset($dataUser['userEmail']) || !isset($dataUser['UserPass'])){
		// 	$jsonStatus = [
		// 		'status' => 'ERROR',
		// 		'msg' => 'Usuario ou senha não preencidos!'
		// 	];

		// 	echo json_encode($jsonStatus);
		// }

		$response = $this->ValidarAcessoModel->validarAcesso($dataUser);

		if($response['status'] == 'usuarioLogado'){

			echo json_encode($response);
			exit();
		}

		$error = [
			'status' => 'userOrEmailIncorrect'
		];

		echo json_encode($error);

	}
}
