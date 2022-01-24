<?php
require_once("class/Estrategia.php");

class EstrategiaDaoMysql implements EstrategiaDAO{
    private $conn;

    public function __construct(Conexao $conn){
        $this->conn = $conn->conectar();
    }
    public function add(Estrategia $e){
        $sql = $this->conn->prepare("INSERT INTO `tb_estrategias` (`cod`, `nome`, `qual_estrategia`, `principais_ganhos`, `organizar_alunos`, `etapas`, `implementar_estrutura`, `artigos`, `classificacao`, `referencias`, `status_estrategia`, `cod_usuario`, `preRequisito`) VALUES (NULL, :nome, :qualEstrategia, :principaisGanhos, :organizarAlunos, :etapas, :implementarEstrutura, :Artigos, :classificacao, :referencia, :status_estrategia, :cod_usuario, :preRequisito)");

        $sql->bindValue(':nome', $e->getNome());
        $sql->bindValue(':qualEstrategia', $e->getQualEstrategia());
        $sql->bindValue(':principaisGanhos', $e->getPrincipaisGanhos());
        $sql->bindValue(':organizarAlunos', $e->getOrganizarAlunos());
        $sql->bindValue(':etapas', $e->getEtapas());
        $sql->bindValue(':implementarEstrutura', $e->getImplementarEstrategia());
        $sql->bindValue(':Artigos', $e->getArtigo());
        $sql->bindValue(':classificacao', $e->getClassificacao());
        $sql->bindValue(':referencia', $e->getReferencia());
        $sql->bindValue(':status_estrategia', 0);
        $sql->bindValue(':cod_usuario', $e->getCodUsuario());
        $sql->bindValue(':preRequisito', $e->getPreRequisitos());
        
        return $sql->execute();
               
        
        
    }
    public function findAll(){
        $array = array();
        $sql = $this->conn->query("SELECT * FROM tb_estrategias");
        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();
            foreach($dados as $item){
                $e = new Estrategia();
                $e->setCod($item['cod']);
                $e->setNome($item['nome']);
                $e->getQualEstrategia($item['qual_estrategia']);
                $e->getPrincipaisGanhos($item['principais_ganhos']);
                $e->setOrganizarAlunos($item['organizar_alunos']);
                $e->setEtapas($item['etapas']);
                $e->setImplementarEstrategia($item['implementar_estrutura']);
                $e->setArtigo($item['artigos']);
                $e->setClassificacao($item['classificacao']);
                $e->setReferencia($item['referencias']);
                $e->setStatus($item['status_estrategia']);
                $e->setCodUsuario($item['cod_usuario']);
                $array[] = $e;
            }
        }
        return $array;
    }
    public function findAllCod($cod){
        $array  = array();
        $sql = $this->conn->prepare("SELECT * FROM tb_estrategias WHERE cod_usuario = :cod");
        $sql->bindValue(":cod", $cod);

        $sql->execute();
        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();
            foreach($dados as $item){
                $e = new Estrategia();
                $e->setCod($item['cod']);
                $e->setNome($item['nome']);
                $e->getQualEstrategia($item['qual_estrategia']);
                $e->getPrincipaisGanhos($item['principais_ganhos']);
                $e->setOrganizarAlunos($item['organizar_alunos']);
                $e->setEtapas($item['etapas']);
                $e->setImplementarEstrategia($item['implementar_estrutura']);
                $e->setArtigo($item['artigos']);
                $e->setClassificacao($item['classificacao']);
                $e->setReferencia($item['referencias']);
                $e->setStatus($item['status_estrategia']);
                $e->setCodUsuario($item['cod_usuario']);
                $array[] = $e;
            }
        }
        return $array;
    }
    public function findById($id){
        $sql = $this->conn->prepare("SELECT tb_estrategias.nome, tb_estrategias.qual_estrategia, 
        tb_estrategias.principais_ganhos, tb_estrategias.organizar_alunos,
         tb_estrategias.etapas, tb_estrategias.implementar_estrutura, tb_estrategias.artigos,
          tb_estrategias.classificacao, tb_estrategias.referencias, tb_estrategias.preRequisito FROM tb_estrategias WHERE tb_estrategias.cod = :cod");
        $sql->bindValue(":cod", $id);
        $sql->execute();
        if($sql->rowCount()>0){
            $dados = $sql->fetch();
            $e = new Estrategia();
            $e->setCod($id);
            $e->setNome($dados['nome']);
            $e->setQualEstrategia($dados['qual_estrategia']);
            $e->setPrincipaisGanhos($dados['principais_ganhos']);
            $e->setOrganizarAlunos($dados['organizar_alunos']);
            $e->setEtapas($dados['etapas']);
            $e->setImplementarEstrategia($dados['implementar_estrutura']);
            $e->setArtigo($dados['artigos']);
            $e->setClassificacao($dados['classificacao']);
            $e->setReferencia($dados['referencias']);
            $e->setPreRequisitos($dados['preRequisito']);
            return $e;
        } 
        
    }
    public function update(Estrategia $e){
        $sql = $this->conn->prepare("UPDATE tb_estrategias SET nome = :nome, qual_estrategia = :qualEstrategia, principais_ganhos = :principaisGanhos, organizar_alunos = :organizarAlunos, etapas = :etapas, implementar_estrutura = :implementarEstrutura, artigos = :Artigos, classificacao = :classificacao, referencias = :referencia, preRequisito = :preRequisito WHERE cod = :cod");

        $sql->bindValue(':cod', $e->getCod());
        $sql->bindValue(':nome', $e->getNome());
        $sql->bindValue(':qualEstrategia', $e->getQualEstrategia());
        $sql->bindValue(':principaisGanhos', $e->getPrincipaisGanhos());
        $sql->bindValue(':organizarAlunos', $e->getOrganizarAlunos());
        $sql->bindValue(':etapas', $e->getEtapas());
        $sql->bindValue(':implementarEstrutura', $e->getImplementarEstrategia());
        $sql->bindValue(':Artigos', $e->getArtigo());
        $sql->bindValue(':classificacao', $e->getClassificacao());
        $sql->bindValue(':referencia', $e->getReferencia());
        $sql->bindValue(':preRequisito', $e->getPreRequisitos());
        
       return $sql->execute();
    }
    public function detele($id){
        $sql = $this->conn->prepare("DELETE FROM tb_estrategias WHERE tb_estrategias.cod = :cod");
        $sql->bindValue(":cod", $id);
        $sql->execute();
        if($sql->rowCount() > 0){
            return true;
        }

        return false;
    }
}
?>