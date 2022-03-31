<?php
require ("Conexao.php");
require ("dao/TurmaDaoMysql.php");
require ("dao/AlunosQuestoesDaoMysql.php");
$conn = new Conexao();
$turmaDAO = new TurmaDaoMysql($conn);
$alunoQuest = new AlunosQuestoesDaoMysql($conn);

$turma = new Turma();
$turma->setUniversidade($_GET['universidade']);
$turma->setCurso($_GET['nameCurso']);
$turma->setComponente($_GET['componente']);
$turma->setPontosPositivos($_GET['pontosPositivos']);
$turma->setPontosNegativos($_GET['pontosNegativos']);
$turma->setCodProfessor($_GET['cod']);
$turma->setCodEstrategia($_GET['estrategia']);
if($_GET['exampleRadios'] == 'opcao2'){
    $turma->setNome($_GET['turmaName']);
    $codTurma =  $turmaDAO->insert($turma);
} else if($_GET['exampleRadios'] == 'opcao1'){
    $turma->setCod($_GET['turmaNameSelect']);
    $codTurma = $turma->getCod();
}


$codEstrategia = $_GET['estrategia'];
$numeroDeAlunos = $_GET['numeroAlunos'];
$tipoQuestionario = $_GET['questionario'];



if($tipoQuestionario == 1){

    for($i = 0; $i<$numeroDeAlunos; $i++){
        $newE = new Aluno_Questoes();
        $newE->setAluno("E".$i);
        $newE->setCodTurma($codTurma);
        $newE->setCodQuestionario($tipoQuestionario);
        $newE->setCodEstrategia($codEstrategia);
        $newE->setQ1($_GET['avaliacao-Aluno'.$i.'-Item0']);
        $newE->setQ2($_GET['avaliacao-Aluno'.$i.'-Item1']);
        $newE->setQ3($_GET['avaliacao-Aluno'.$i.'-Item2']);
        $newE->setQ4($_GET['avaliacao-Aluno'.$i.'-Item3']);
        $newE->setQ5($_GET['avaliacao-Aluno'.$i.'-Item4']);
        $newE->setQ6($_GET['avaliacao-Aluno'.$i.'-Item5']);
        $newE->setQ7($_GET['avaliacao-Aluno'.$i.'-Item6']);
        $newE->setQ8($_GET['avaliacao-Aluno'.$i.'-Item7']);
        
        $alunoQuest->insert($newE);
    }
    header("Location: relatorio.php?turma=$codTurma&questionario=$tipoQuestionario&codEstrategia=$codEstrategia");
} else if($tipoQuestionario == 2){
    
    for($i = 0; $i<$numeroDeAlunos; $i++){
        $newE = new Aluno_Questoes();
        $newE->setAluno("E".$i);
        $newE->setCodTurma($codTurma);
        $newE->setCodQuestionario($tipoQuestionario);
        $newE->setCodEstrategia($codEstrategia);
        $newE->setQ1($_GET['avaliacao-Aluno'.$i.'-Item0']);
        $newE->setQ2($_GET['avaliacao-Aluno'.$i.'-Item1']);
        $newE->setQ3($_GET['avaliacao-Aluno'.$i.'-Item2']);
        $newE->setQ4($_GET['avaliacao-Aluno'.$i.'-Item3']);
        $newE->setQ5($_GET['avaliacao-Aluno'.$i.'-Item4']);
        $newE->setQ6($_GET['avaliacao-Aluno'.$i.'-Item5']);
        $newE->setQ7($_GET['avaliacao-Aluno'.$i.'-Item6']);
        $newE->setQ8($_GET['avaliacao-Aluno'.$i.'-Item7']);
        $newE->setQ9($_GET['avaliacao-Aluno'.$i.'-Item8']);
        $newE->setQ10($_GET['avaliacao-Aluno'.$i.'-Item9']);
        $alunoQuest->insert($newE);
    }
    header("Location: relatorio.php?turma=$codTurma&questionario=$tipoQuestionario&codEstrategia=$codEstrategia");
}

//echo $_GET['questionario'];

?>