<h1>Principais Ganhos</h1>
<?php
require("conexao.php");
require("dao/EstrategiaDaoMysql.php");
$conexao = new Conexao();
$estrategiaDao = new EstrategiaDaoMysql($conexao);
$ql = $estrategiaDao->principaisGanhos($_GET['cod']);?>
<p class="lead"><?= $ql->getPrincipaisGanhos();?></p>