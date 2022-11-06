<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ValidarAcessoModel extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

	private static function conn(): \PDO
	{
		$host = '127.0.0.1';
		$db   = 'pibackend';
		$user = 'root';
		$pass = 'admin95*';
		$port = "3306";
		$charset = 'utf8mb4';
		$options = [
	    	\PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
	    	\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
	    	\PDO::ATTR_EMULATE_PREPARES   => false,
		];

		$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";

		return new \PDO($dsn, $user, $pass, $options);

	}

	public function validarAcesso(Array $dataUser)
	{
		
		$conn = self::conn();

		$query = "SELECT * FROM user
			WHERE user_email = :email";
			
		$statment = $conn->prepare($query);
		$statment->bindParam(':email', $dataUser['userEmail']);
		$statment->execute();

		$data = $statment->fetch(PDO::FETCH_ASSOC);

		if(count($data) === 0) {
            $dataResp = [
                'status' => 'incorrectEmail',
                'msg' => 'E-mail não cadastrado'  
            ];
            return $dataResp;
        }

		if(!password_verify($dataUser['userPass'], $data['user_password'])){
			$dataResp = [
                'status' => 'errorIncorrectMailOrPass',
                'msg' => 'E-mail ou senha incorretos'  
            ];
            return $dataResp;

		} else {

			$query = "SELECT a.user_id,
							 a.user_name,
							 a.user_email,
							 a.user_tipo,
							 a.user_score
					  FROM user a
					  WHERE a.user_email = :user_email
			";
			$statment = $conn->prepare($query);
			$statment->bindParam(':user_email', $dataUser['userEmail']);
			$statment->execute();

			$resp = $statment->fetch(PDO::FETCH_ASSOC);

			$this->session->set_userdata([
				'logged' => true,
				'nome' => $resp['user_name']
			]);

			$dataResponse = [
				'status' => 'usuarioLogado'
			];

			return $dataResponse;

		}


	}
}
