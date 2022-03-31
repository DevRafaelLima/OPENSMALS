<?php
require("class/Usuario.php");

class UsuarioDaoMysql implements UsuarioDao{
    private $conn;

    public function __construct(Conexao $conn){
        $this->conn = $conn->conectar();
    }
    
    public function findAll(){
        $array = array();
        $sql = $this->conn->query("SELECT * FROM tb_usuarios");

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();
            foreach($dados as $dado){
                $user = new Usuario();
                $user->setCod($dado['cod']);
                $user->setNome($dado['nome']);
                $user->setEmail($dado['email']);

            $array[] = $user;
            }
        }
        return $array;
    }
}
?>