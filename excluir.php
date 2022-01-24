<?php
require("conexao.php");
require("dao/EstrategiaDaoMysql.php");
$conexao = new Conexao();
$estrategiaDao = new EstrategiaDaoMysql($conexao);
if($estrategiaDao->detele($_GET['cod'])){
    header("Location: minha-area.php?excluir=ok");
} else{
    header("Location: minha-area.php?excluir=off");
}

?>