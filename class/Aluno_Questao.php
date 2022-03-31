<?php
class Aluno_Questoes{
    private $cod;
    private $codTurma;
    private $codQuestionario;
    private $codEstrategia;
    private $aluno;
    private $q1;
    private $q2;
    private $q3;
    private $q4;
    private $q5;
    private $q6;
    private $q7;
    private $q8;
    private $q9;
    private $q10;
    

    public function setCod($cod){$this->cod  = $cod;}
    public function setCodTurma($codTurma){$this->codTurma = $codTurma;}
    public function setCodQuestionario($q){$this->codQuestionario = $q;}
    public function setAluno($aluno){$this->aluno = $aluno;}
    public function setCodEstrategia($cod){$this->codEstrategia = $cod;}
    public function setQ1($x){$this->q1 = $x;}
    public function setQ2($x){$this->q2 = $x;}
    public function setQ3($x){$this->q3 = $x;}
    public function setQ4($x){$this->q4 = $x;}
    public function setQ5($x){$this->q5 = $x;}
    public function setQ6($x){$this->q6 = $x;}
    public function setQ7($x){$this->q7 = $x;}
    public function setQ8($x){$this->q8 = $x;}
    public function setQ9($x){$this->q9 = $x;}
    public function setQ10($q10){$this->q10 = $q10;}

    public function getCod(){return $this->cod;}
    public function getCodTurma(){return $this->codTurma;}
    public function getCodQuestionario(){return $this->codQuestionario;}
    public function getCodEstrategia(){return $this->codEstrategia;}
    public function getAluno(){return $this->aluno;}
    public function getQ1(){return $this->q1;}
    public function getQ2(){return $this->q2;}
    public function getQ3(){return $this->q3;}
    public function getQ4(){return $this->q4;}
    public function getQ5(){return $this->q5;}
    public function getQ6(){return $this->q6;}
    public function getQ7(){return $this->q7;}
    public function getQ8(){return $this->q8;}
    public function getQ9(){return $this->q9;}
    public function getQ10(){return $this->q10;}
}

interface AlunosQuestoesDao{
    public function insert(Aluno_Questoes $a);
    public function update(Aluno_Questoes $a);
    public function findByCod(Aluno_Questoes $a);
    public function delete($cod);
    public function finbAll();
}
?> 