<?php


class Estrategia {
    private $cod;
    private $nome;
    private $qual_estrategia;
    private $principais_ganhos;
    private $organizar_alunos;
    private $etapas;
    private $implementar_estrategia;
    private $artigo;
    private $classificacao;
    private $referencia;
    private $preRequisitos;
    private $status;
    private $cod_usuario;
    private $comments;

    public function __construct(){

    }
    public function setComments($x){$this->comments = $x;}
    public function getComments(){return $this->comments;}
    public function setPreRequisitos($x){$this->preRequisitos = $x;}
    public function getPreRequisitos(){return $this->preRequisitos;}
    public function setCodUsuario($cod){
        $this->cod_usuario = $cod;
    }
    public function getCodUsuario(){
        return $this->cod_usuario;
    }
    public function setCod($cod){
        $this->cod = $cod;
    }
    public function getCod(){
        return $this->cod;
    }
    public function setNome($x){
        $this->nome = $x;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setQualEstrategia($x){
        $this->qual_estrategia = $x;
    }
    public function getQualEstrategia(){
        return $this->qual_estrategia;
    }

    public function setPrincipaisGanhos($x){
        $this->principais_ganhos = $x;
    }
    public function getPrincipaisGanhos(){
        return $this->principais_ganhos;
    }


    public function setOrganizarAlunos($x){
        $this->organizar_alunos = $x;
    }
    public function getOrganizarAlunos(){
        return $this->organizar_alunos;
    }
    public function setEtapas($x){
        $this->etapas = $x;
    }
    public function getEtapas(){
        return $this->etapas;
    }
    public function setImplementarEstrategia($x){
        $this->implementar_estrategia = $x;
    }
    public function getImplementarEstrategia(){
        return $this->implementar_estrategia;
    }
    public function setArtigo($x){
        $this->artigo = $x;
    }
    public function getArtigo(){
        return $this->artigo;
    }
    public function setClassificacao($x){
        return $this->classificacao = $x;
    }
    public function getClassificacao(){
        return $this->classificacao;
    }
    public function setReferencia($x){
        $this->referencia = $x;
    }
    public function getReferencia(){
        return $this->referencia;
    }
    public function setStatus($x){
        $this->status = $x;
    }
    public function getStatus(){
        return $this->status;
    }
}
interface EstrategiaDAO{
    public function add(Estrategia $e);
    public function findAll();
    public function findAllCod($cod);
    public function findById($id);
    public function update(Estrategia $e);
    public function detele($id);
    public function findAllAvall();
    public function avaliar(Estrategia $e);
    public function findAllAtivas();
    public function qualEstrategia($cod);
    public function principaisGanhos($cod);
    public function organizarAlunos($cod);
    public function preRequisitos($cod);
    public function etapas($cod);
    public function implementarEstrategia($cod);
    public function classificacao($cod);
    public function referencia($cod);
    public function artigos($cod);
    public function findEscolhendoEstrategia();
}
?>