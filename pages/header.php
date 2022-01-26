<?php
require("conexao.php");
require("dao/EstrategiaDaoMysql.php");
$conexao = new Conexao();
$estrategiaDao = new EstrategiaDaoMysql($conexao);
$estrategias = $estrategiaDao->findAllAtivas();
?>
<header class="container-fluid">
    <div class="container-fluid">
        <div class="header">
            <div class="logo">
                <img src="assets/img/huge.png" alt="OpenSMALs">
            </div>
            <div class="menu">
                <ul>
                  <li><a href="index.php">Página Inicial</a></li>
                  <li><a href="estrategias.php">Escolhendo Estratégias</a></li>
                  <li>
                    <div class="dropdown">
                      <button class="dropbtn"><a href="escolhendoEstrategia.php">Estratégias de Ensino</a></button>
                      <div class="dropdown-content">
                        <?php foreach($estrategias as $e):?>
                          <!--item-->
                          <div class="dropdownInt">
                            <div class="droptbtnInt"><a href="estrategia-noticia.php?cod=<?= $e->getCod()?>"><?=$e->getNome()?></a></div>
                            <div class="dropdown-content-int">
                                <a href="estrategia-noticia.php?cod=<?= $e->getCod()?>#sobreEstrategia">Sobre a Estratégia</a>
                                <a href="estrategia-noticia.php?cod=<?= $e->getCod()?>#avaliacao">Avaliação</a>
                            </div>
                          </div>
                          <!--fim item-->
                        <?php endforeach ?>  

                      </div>
                    </div>
                  </li>
                  <li><a href="momentosAprendizagem.php">Momentos de Aprendizagem</a></li>
                  <li><a href="artefatosEnsino.php">Artefatos de Ensino</a></li>
                  <li><a href="noticias.php">Notícias</a></li>
                  <?php if(isset($_SESSION['email']) && !empty($_SESSION['email'])):?>
                    
                      <li><a href="minha-area.php">Minha área</a></li>
                      <li><a href="sair.php">sair</a></li>
                    
                  <?php else: ?>
                    
                      <li><a href="cadastro.php">Cadastre-se</a></li>
                      <li><a href="login.php">Login</a></li>
                  <?php endif ?>  
                 <!--
                  <li><a href="noticias.php">Área adminstrativa</a></li>
-->
                </ul>
            </div>
        </div>
    </div>
</header>