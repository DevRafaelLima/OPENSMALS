<h1>Classificação</h1>
<?php
require("conexao.php");
require("dao/EstrategiaDaoMysql.php");
$conexao = new Conexao();
$estrategiaDao = new EstrategiaDaoMysql($conexao);
$ql = $estrategiaDao->classificacao($_GET['cod']);?>
<p class="lead"><?= $ql->getClassificacao();?></p>