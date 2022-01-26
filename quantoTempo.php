<h1>Quanto tempo leva para preparar e implementar a estratégia?</h1>
<?php
require("conexao.php");
require("dao/EstrategiaDaoMysql.php");
$conexao = new Conexao();
$estrategiaDao = new EstrategiaDaoMysql($conexao);
$ql = $estrategiaDao->implementarEstrategia($_GET['cod']);?>
<p class="lead"><?= $ql->getImplementarEstrategia();?></p>