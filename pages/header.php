<?php
session_start();
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
                        <!--item-->
                        <div class="dropdownInt">
                          <div class="droptbtnInt"><a href="aprendizagemSemelhante.php">Aprendizagem Baseada em Sistemas Familiares</a></div>
                          <div class="dropdown-content-int">
                              <a href="aprendizagemSemelhante.php#sobreEstrategia">Sobre a Estratégia</a>
                              <a href="aprendizagemSemelhante.php#avaliacao">Avaliação</a>
                          </div>
                        </div>
                        <!--fim item-->
                        <!--item-->
                        <div class="dropdownInt">
                          <div class="droptbtnInt"><a href="serraVaiVem.php">Jigsaw</a></div>
                          <div class="dropdown-content-int">
                              <a href="serraVaiVem.php#sobreEstrategia">Sobre a Estratégia</a>
                          </div>
                        </div>
                        <!--fim item-->
                        <!--item-->
                        <div class="dropdownInt">
                          <div class="droptbtnInt"><a href="exemplosErroneos.php">Learning from Erroneous Examples</a></div>
                          <div class="dropdown-content-int">
                              <a href="exemplosErroneos.php#sobreEstrategia">Sobre a Estratégia</a>
                              <a href="exemplosErroneos.php#avaliacao">Avaliação</a>
                          </div>
                        </div>
                        <!--fim item-->
                        <!--item-->
                        <div class="dropdownInt">
                          <div class="droptbtnInt"><a href="estrategiaInspecao.php">Métodos de Aprendizagem utilizando dados de Inspeções</a></div>
                          <div class="dropdown-content-int">
                              <a href="estrategiaInspecao.php#sobreEstrategia">Sobre a Estratégia</a>
                              <a href="estrategiaInspecao.php#avaliacao">Avaliação</a>
                          </div>
                        </div>
                        <!--fim item-->
                        <!--item-->
                        <div class="dropdownInt">
                          <div class="droptbtnInt"><a href="abordagemMultimodal.php">Multimodal Approach</a></div>
                          <div class="dropdown-content-int">
                              <a href="abordagemMultimodal.php#sobreEstrategia">Sobre a Estratégia</a>
                              
                          </div>
                        </div>
                        <!--fim item-->
                        <!--item-->
                        <div class="dropdownInt">
                          <div class="droptbtnInt"><a href="ExemplosNegativos.php">Negative Examples </a></div>
                          <div class="dropdown-content-int">
                              <a href="ExemplosNegativos.php#sobreEstrategia">Sobre a Estratégia</a>
                              <a href="ExemplosNegativos.php#avaliacao">Avaliação</a>
                          </div>
                        </div>
                        <!--fim item-->
                        <!--item-->
                        <div class="dropdownInt">
                          <div class="droptbtnInt"><a href="metodoEnsino.php">PBL + LBL Double Track Teaching Method</a></div>
                          <div class="dropdown-content-int">
                              <a href="metodoEnsino.php#sobreEstrategia">Sobre a Estratégia</a>
                              
                          </div>
                        </div>
                        <!--fim item-->
                        <!--item-->
                        <div class="dropdownInt">
                          <div class="droptbtnInt"><a href="exemploPositivo.php">Positive Examples</a></div>
                          <div class="dropdown-content-int">
                              <a href="exemploPositivo.php#sobreEstrategia">Sobre a Estratégia</a>
                              <a href="exemploPositivo.php#avaliacao">Avaliação</a>
                          </div>
                        </div>
                        <!--fim item-->
                        <!--item-->
                        <div class="dropdownInt">
                          <div class="droptbtnInt"><a href="aprendizagemProblemas.php">Problem Based Learning (PBL) Adapted</a></div>
                          <div class="dropdown-content-int">
                              <a href="aprendizagemProblemas.php#sobreEstrategia">Sobre a Estratégia</a>
                              <a href="aprendizagemProblemas.php#avaliacao">Avaliação</a>
                          </div>
                        </div>
                        <!--fim item-->
                        <!--item-->
                        <div class="dropdownInt">
                          <div class="droptbtnInt"><a href="think.php">Think-Pair-Square</a></div>
                          <div class="dropdown-content-int">
                              <a href="think.php#sobreEstrategia">Sobre a Estratégia</a>
                              <a href="think.php#avaliacao">Avaliação</a>
                          </div>
                        </div>
                        <!--fim item-->
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