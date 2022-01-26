<h1>Quais são as etapas para aplicar essa estratégia?</h1>
<?php
require("conexao.php");
require("dao/EstrategiaDaoMysql.php");
$conexao = new Conexao();
$estrategiaDao = new EstrategiaDaoMysql($conexao);
$ql = $estrategiaDao->etapas($_GET['cod']);?>
<p class="lead"><?= $ql->getEtapas();?></p>