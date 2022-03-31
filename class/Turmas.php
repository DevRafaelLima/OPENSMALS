<?php
class Turma{
    private $cod;
    private $universidade;
    private $nome;
    private $curso;
    private $nEstudantes;
    private $componente;
    private $pontosPositivos;
    private $pontosNegativos;

    //associação
    private $codProfessor;
    private $codEstrategia;

    public function setCod($cod){$this->cod = $cod;}
    public function setUniversidade($uni){$this->universidade = $uni;}
    public function setCurso($curso){$this->curso = $curso;}
    public function setNEstudantes($n){$this->nEstudantes = $n;}
    public function setNome($x){$this->nome= $x;}
    public function setComponente($x){$this->componente = $x;}
    public function setCodProfessor($x){$this->codProfessor = $x;}
    public function setCodEstrategia($x){$this->codEstrategia = $x;}
    public function setPontosPositivos($x){$this->pontosPositivos = $x;}
    public function setPontosNegativos($x){$this->setPontosNegativos = $x;}

    public function getCod(){return $this->cod;}
    public function getUniversidade(){return $this->universidade;}
    public function getNome(){return $this->nome;}
    public function getCurso(){return $this->curso;}
    public function getNEstudantes(){return $this->nEstudantes;}
    public function getComponente(){return $this->componente;}
    public function getCodProfessor(){return $this->codProfessor;}
    public function getCodEstrategia(){return $this->codEstrategia;}
    public function getPontosPositivos(){return $this->pontosPositivos;}
    public function getPontosNegativos(){return $this->pontosNegativos;}
}

interface TurmaDao{
    public function findAll($cod);
    public function findAllCod($cod);
    public function insert(Turma $turma);
    public function update(Turma $truma);
    public function delele($cod);
    public function findByCod($cod);
}


?>