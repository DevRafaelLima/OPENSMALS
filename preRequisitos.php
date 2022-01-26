<h1>Quais são os pre-requisitos para usar está estratégia</h1>
<?php 
require("conexao.php");
require("dao/EstrategiaDaoMysql.php");
$conexao = new Conexao();
$estrategiaDao = new EstrategiaDaoMysql($conexao);
$ql = $estrategiaDao->preRequisitos($_GET['cod']);?>
<p class="lead"><?= $ql->getPreRequisitos();?></p>