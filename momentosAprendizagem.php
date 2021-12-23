<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS3 estilizado-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Artefatos de Ensino</title>
</head>
<body>
<?php
      require('pages/header.php')
  ?>
    
    <!--Migalha de pão-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="escolhendoEstrategia.html">Página inicial</a></li>
          <li class="breadcrumb-item active" aria-current="page">Momentos de Aprendizagem</li>
        </ol>
     </nav>
     <hr>
     <!--fim migalha de pão-->
     <!--topo-->
     <div class="estrategiaTopo container-fluid">
        <div class="areaInterna">
            <h1>Momentos de Aprendizagem</h1>
        </div>
    </div>
    <!--fim topo-->
    <!--estratégias-->
    <div id="estrategias">
          
          
            <div class="container">
              <div class="row">
                <div class="col"><!--col'-->
                  <div class="conteudo">
                    <h2>Começo da prendizagem</h2>
                    <p>(Quando os alunos ainda não aprenderam o conceito sobre o modelo)</p>
                    <div class="conteudoEstrategiasInfo">
                      <h4>Ao longo do curso(o instrutor atua apenas como moderador da atividade)</h4>
                      <ul>
                        <li><a href="serraVaiVem.php">Jigsaw</a></li>
                        <li><a href="aprendizagemProblemas.php">Problem Based Learning (PBL) Adapted</a></li>
                      </ul>
                      
                      <h4>Ao Longo do curso (o instrutor apresenta os conceitos para a classe primeiro)</h4>
                      <ul>
                        <li><a href="abordagemMultimodal.php">Multimodal Approach</a></li>
                        <li><a href="metodoEnsino.php">PBL + LBL Double Track Teaching Method</a></li>
                      </ul>

                      <h4>Em algumas aulas (máximo três aulas)</h4>
                      <ul>
                        <li><a href="serraVaiVem.php">Ji gsaw</a></li>
                        <li><a href="abordagemMultimodal.php">Multimodal Approach</a></li>
                      </ul>
                    </div>
                  </div>
                 </div><!--fim col-->
                <div class="col"> <!--col-->
                  <div class="conteudo">
                    <h2>Após a apresentação inicial dos conceitos sobre o modelo</h2>
                    <p>(Depois que os alunos fazem alguns exercícios sobre modelagem de software)</p>
                    <div class="conteudoEstrategiasInfo">
                      <h4>Os alunos precisam de ajuda para desenvolver os modelos</h4>
                      <ul>
                        <li><a href="exemploPositivo.php">Positive Examples</a></li>
                        <li><a href="ExemplosNegativos.php">Negative Examples </a></li>
                      </ul>
                      
                      <h4>Os alunos precisam praticar modelagem</h4>
                      <ul>
                        <li><a href="think.php">Think-Pair-Square</a></li>
                        <li><a href="aprendizagemSemelhante.php">Aprendizagem Baseada em Sistemas Familiares</a></li>
                      </ul>

                      <h4>Os alunos precisam aprimorar ainda mais o conhecimento de modelagem de software</h4>
                      <ul>
                        <li><a href="exemplosErroneos.php">Learning from Erroneous Examples</a></li>
                        <li><a href="estrategiaInspecao.php">Métodos de Aprendizagem utilizando dados de Inspeções</a></li>
                      </ul>
                    </div>
                  </div>
                </div><!--fim col-->
              </div>
            </div>
        </div>
  <!--Fim estratégias-->
  <?php
      require('pages/footer.php')
    ?>
</body>
</html>