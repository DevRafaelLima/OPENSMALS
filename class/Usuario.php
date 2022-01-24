<?php
/*
classe de usuário, de mais importante nesta classe é o tratamento dos set, onde no setEmail 
tranformo o email do usuário em minusculo, e removo os espaços no começo e no fim da string. 
já no set de senha eu criptografo em MD5.
*/
class Usuario {
	
	//atibutos
	private $email;
	private $senha;


	//construtor
	public function __construct($email, $senha){
		$this->setEmail($email);
		$this->setSenha($senha);
	}
	
	//métodos acessores e modificadores
	public function setEmail($x){
		$this->email = strtolower(trim($x));
	} 
	public function getEmail(){
		return $this->email;
	}
	public function setSenha($x){
		$this->senha = md5($x);
	}
	public function getSenha(){
		return $this->senha;
	}


}
?>