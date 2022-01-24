<?php
    require("conexao.php");
    require("dao/EstrategiaDaoMysql.php");
    $conn = new Conexao();
    $EstrategiaDao = new EstrategiaDaoMysql($conn);
    $newEstrategia = new Estrategia();
    $nome = $_GET['nome'];
    $qualEstrategia = $_GET['qual-estrategia'];
    $principaisGanhos = $_GET['principais-ganhos'];
    $organizarAluno = $_GET['organizar-alunos'];
    $preRequisitos = $_GET['pre-requisitos'];
    $etapas = $_GET['etapas'];
    $implementarEstrategia = $_GET['implementar-estrategia'];
    $artigo = $_GET['artigo'];
    $classificacao = $_GET['estrategia'];
    $referencia = $_GET['referencia'];
    $id = $_GET['id'];
    

    $newEstrategia->setNome($nome);
    $newEstrategia->setPreRequisitos($preRequisitos);
    $newEstrategia->setQualEstrategia($qualEstrategia);
    $newEstrategia->setPrincipaisGanhos($principaisGanhos);
    $newEstrategia->setOrganizarAlunos($organizarAluno);
    $newEstrategia->setEtapas($etapas);
    $newEstrategia->setImplementarEstrategia($implementarEstrategia);
    $newEstrategia->setArtigo($artigo);
    $newEstrategia->setClassificacao($classificacao);
    $newEstrategia->setReferencia($referencia);
    $newEstrategia->setCodUsuario($id);

    //     // echo $EstrategiaDao->add($newEstrategia);
    if($EstrategiaDao->add($newEstrategia)){
        header("Location: minha-area.php");
    } else {
        echo "Location: minha-area.php?erro=1";
    }
   

?>