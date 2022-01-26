<h1>Artigos com exemplos de uso da estratégia</h1>
<?php
require("conexao.php");
require("dao/EstrategiaDaoMysql.php");
$conexao = new Conexao();
$estrategiaDao = new EstrategiaDaoMysql($conexao);
$ql = $estrategiaDao->artigos($_GET['cod']);?>
<p class="lead"><?= $ql->getArtigo();?></p>