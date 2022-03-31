<?php
session_start();
class Conexao{
	private $host = 'localhost';
	private $bandoDados = 'opensmals';
	private $user = 'root';
	private $pass = '';

	public function __construct(){
		
	}
	//método irá realizar a conexão com o banco de dados.
	public function conectar(){
		
		try{

			$bd = new PDO(
				"mysql:host=$this->host;dbname=$this->bandoDados",
				"$this->user",
				"$this->pass"
			);
				
			return $bd;
		} catch(PDOException $e){
			
			echo "erro ao conectar ao banco de dados".$e->getMessage();	

		}
	}

}
?>