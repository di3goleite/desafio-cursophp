<?php

namespace Project\Lib;

class Connection
{
	private $host = "172.31.6.165";
	private $db = "desafio";
	private $user = "root";
	private $passwd = "d13g0xD";

	public function __construct(){

	}

	$pdo = new PDO("mysql:host=$host;dbname=$db", "$user", "$passwd");
	$statement = $pdo->query("SELECT * FROM Usuario");
	
}