<?php

namespace model;

class Usuario{

	private $login;
	private $senha;


	protected $session;

	public function __construct(Session $session = null)
	{
		$this->session = $session;
	}

	private function getUsuarios()
	{
		$usuarios[] = ['login' => 'login', 'senha' => 'login'];
		$usuarios[] = ['login' => 'login2', 'senha' => 'login2'];
		return $usuarios;
	}

	public function isExists($login, $senha)
	{
		$exists = false;
		foreach($this->getUsuarios() as $usuario) 
			if ($usuario === $usuario['login']
					&& $senha === $usuario['senha'])
			{
				$exists = true;		
				break;	
			}			

		return $exists;
	}

	public function isLogged()
	{				
		$session = $this->session->getSession();
		return isset($session['login']) 
			   || $session['login'] === '1';
	}



}














?>