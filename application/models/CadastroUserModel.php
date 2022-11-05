<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroUserModel extends CI_Model {
	
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

	public function cadastrar($data): bool
	{
		$conn = self::conn();

		$query = "INSERT INTO user
				  (user_name, user_email, user_password, user_tipo, user_cpf)
				  VALUES
				  (:user_name, :user_email, :user_password, :user_tipo, :user_cpf)
		";

		$statment = $conn->prepare($query);
		$statment->bindValue('user_name', $data['nome']);
		$statment->bindValue('user_email', $data['email']);
		$statment->bindValue('user_password', $data['senha']);
		$statment->bindValue('user_tipo', $data['userTipo']);
		$statment->bindValue('user_cpf', $data['cpf']);

		return $statment->execute();
	}
}
