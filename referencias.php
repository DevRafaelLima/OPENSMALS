<h1>ReferĂȘncias</h1>
<?php 
require("conexao.php");
require("dao/EstrategiaDaoMysql.php");
$conexao = new Conexao();
$estrategiaDao = new EstrategiaDaoMysql($conexao);
$ql = $estrategiaDao->referencia($_GET['cod']);?>
<p class="lead"><?= $ql->getReferencia();?></p>