<?php

namespace Project\Model;

include ../lib/Connection.php;

use Project\Lib\Connection as DB;

$db = new DB;

class Usuario{

	protected $conn, $usuario, $senha;

	public class __construct($usuario, $senha)
	{
		$this->conn = $db->getDB();
		$this->usuario = $usuario;
		$this->senha = $senha;
	}

	public class userExist()
	{

	}
}