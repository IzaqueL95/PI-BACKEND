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

	public function validarAcesso(Array $data): bool
	{
		
		$conn = self::conn();

		$query = "SELECT * FROM USUARIO
			WHERE EMAIL = :email";
			
		$prepare = $conn->query($query);
		$response = $prepare->fetchAll(PDO::FETCH_ASSOC);

		return true;

	}
}
