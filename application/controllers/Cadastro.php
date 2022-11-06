<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('CadastroUserModel','', true);
    }

	public function index()
	{
		$this->load->view('vw_cadastro');
	}

	public function cadastrarUser()
	{
		$data = [
			'userTipo' => $this->input->post('tipo'),
			'cpf' => '11111111111',
			'cnpj' => '11111111111111',
			'nome' => $this->input->post('nome'),
			'telefone' => $this->input->post('telefone'),
			'email' => $this->input->post('email'),
			'senha' => password_hash($this->input->post('senha'), PASSWORD_BCRYPT)
		];

		$response = $this->CadastroUserModel->cadastrar($data);

		if($response){
			$data = [
				'resp' => 'success'
			];
			echo json_encode($data);
			exit();
		}
		

		$data = [
			'resp' => 'error'
		];

		echo json_encode($data);
	}
}
