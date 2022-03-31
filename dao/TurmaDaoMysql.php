<?php
require ("class/Turmas.php");
class TurmaDaoMysql implements TurmaDao{
    private $conn;

    public function __construct(Conexao $conn){
        $this->conn = $conn->conectar();
    }
    public function findAll($cod){
        
        $turma = array();
        $sql = $this->conn->prepare("SELECT * FROM `turmas` WHERE codEstrategia = :cod");
        $sql->bindValue(":cod", $cod);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();
            foreach($dados as $dado){
                $t = new Turma();
                $t->setCod($dado['cod']);
                $t->setUniversidade($dado['universidade']);
                $t->setCurso($dado['curso']);
                $t->setNome($dado['nome']);
                $t->setComponente($dado['componente']);
                $t->setCodProfessor($dado['codProf']);
                $t->setCodEstrategia($cod);
                $t->setPontosPositivos($dado['pontosPositivos']);
                $t->setPontosNegativos($dado['pontosNegativos']);

                $sqlNEstudantes = $this->conn->prepare("SELECT COUNT(aluno) AS nEstudantes FROM tb_aluno_questoes WHERE codTurma = :codTurma AND codTipoQuestao = 1");
                $sqlNEstudantes->bindValue("codTurma",$t->getCod());
                $sqlNEstudantes->execute();
                
                if($sqlNEstudantes->rowCount() > 0){
                    $x = $sqlNEstudantes->fetch();
                    $t->setNEstudantes($x['nEstudantes']);
                }


                $turma[] = $t;
            }
        }

        return $turma;

    }
    public function findAllCod($cod){
        $turma = array();
        $sql = $this->conn->prepare("SELECT * FROM `turmas` WHERE codProf = :cod");
        $sql->bindValue(":cod", $cod);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();
            foreach($dados as $dado){
                $t = new Turma();
                $t->setCod($dado['cod']);
                $t->setUniversidade($dado['universidade']);
                $t->setCurso($dado['curso']);
                $t->setNome($dado['nome']);
                $t->setComponente($dado['componente']);
                $t->setCodProfessor($dado['codProf']);
                $t->setCodEstrategia($cod);
                $t->setPontosPositivos($dado['pontosPositivos']);
                $t->setPontosNegativos($dado['pontosNegativos']);
                $turma[] = $t;
            }
        }

        return $turma;
    }
    public function insert(Turma $turma){
    $sql = $this->conn->prepare("INSERT INTO `turmas`
     (`cod`, `codEstrategia`, `codProf`, `nome`, `universidade`, `curso`, `componente`, `pontosPositivos`, `pontosNegativos`)
      VALUES (NULL, :ce, :cp, :n, :u, :c, :com, :pp, :pn)");

    $sql->bindValue(':ce', $turma->getCodEstrategia());
    $sql->bindValue(':cp', $turma->getCodProfessor());
    $sql->bindValue(':n', $turma->getNome());
    $sql->bindValue(':u', $turma->getUniversidade());
    $sql->bindValue(':c', $turma->getCurso());
    $sql->bindValue(':com', $turma->getComponente());
    $sql->bindValue(':pp', $turma->getPontosPositivos());
    $sql->bindValue(':pn', $turma->getPontosNegativos());
    $sql->execute();   
        if($sql->rowCount() > 0){
            return $this->conn->lastInsertId();
        } 
    }
    public function update(Turma $truma){

    }
    public function delele($cod){

    }
    public function findByCod($cod){
        $turma = new Turma();
        $sql = $this->conn->prepare("SELECT * FROM `turmas` WHERE cod = :cod");
        $sql->bindValue(":cod", $cod);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();

            $turma->setCod($dados['cod']);
            $turma->setUniversidade($dados['universidade']);
            $turma->setCurso($dados['curso']);
            $turma->setNome($dados['nome']);
            $turma->setComponente($dados['componente']);
            $turma->setPontosPositivos($dados['pontosPositivos']);
            $turma->setPontosNegativos($dados['pontosNegativos']);
        }

        return $turma;
    }
}

?>