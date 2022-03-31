<?php
require ("class/Aluno_Questao.php");
class AlunosQuestoesDaoMysql implements AlunosQuestoesDao {
    private $conn;

    public function __construct(Conexao $conn){
        $this->conn = $conn->conectar();
    }
    public function insert(Aluno_Questoes $a){
        $sql = $this->conn->prepare("INSERT INTO tb_aluno_questoes (cod, codTurma, codTipoQuestao, codEstrategia, aluno, q1, q2, q3, q4,q5,q6,q7,q8, q9, q10)
        VALUES (NULL, :codTurma, :codTipoQuestao, :codEstrategia, :aluno, :q1, :q2, :q3, :q4, :q5 ,:q6 ,:q7 ,:q8,:q9,:q10)");
        $sql->bindValue(":codTurma", $a->getCodTurma());
        $sql->bindValue(":codTipoQuestao", $a->getCodQuestionario());
        $sql->bindValue(":codEstrategia", $a->getCodEstrategia());
        $sql->bindValue(":aluno", $a->getAluno());
        $sql->bindValue(":q1", $a->getQ1());
        $sql->bindValue(":q2", $a->getQ2());
        $sql->bindValue(":q3", $a->getQ3());
        $sql->bindValue(":q4", $a->getQ4());
        $sql->bindValue(":q5", $a->getQ5());
        $sql->bindValue(":q6", $a->getQ6());
        $sql->bindValue(":q7", $a->getQ7());
        $sql->bindValue(":q8", $a->getQ8());
        $sql->bindValue(":q9", $a->getQ9());
        $sql->bindValue(":q10", $a->getQ10());

        return $sql->execute();
    }
    public function update(Aluno_Questoes $a){

    }
    public function findByCod(Aluno_Questoes $a){

    }
    public function delete($cod){

    }
    public function finbAll(){

    }
}
?>