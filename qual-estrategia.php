<?php
require("conexao.php");
require("dao/EstrategiaDaoMysql.php");
$conexao = new Conexao();
$estrategiaDao = new EstrategiaDaoMysql($conexao);
$ql = $estrategiaDao->qualEstrategia($_GET['cod']);
?>
<h1>Qual é a estratégia?</h1>
<p class="lead"><?=$ql->getQualEstrategia();?></p>