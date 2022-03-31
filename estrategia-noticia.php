
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendizagem baseada em sistemas semelhantes</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <!-- CSS3 estilizado-->
     <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/css/aprendizagemSemelhantes.css">
  
     <!--Font Awesome-->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php
      require('pages/header.php');
      $x = $estrategiaDao->findById($_GET['cod']);
      require ("dao/GerarGraficoDao.php");
      require ("dao/TurmaDaoMysql.php");
      $turmasDao = new TurmaDaoMysql($conexao);
      $graficoDao = new GerarGraficoDao($conexao);
      $grafico = $graficoDao->graficoGeral1($_GET['cod']);
      $grafico2 = $graficoDao->graficoGeral2($_GET['cod']);
      $turmas = $turmasDao->findAll($_GET['cod']);
      
    ?>

    <div id="AprendizagemSemelhantes">
     
     
    <!--Migalha de pão-->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Página inicial</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="escolhendoEstrategia.php">Estratégias de Ensino</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?=$x->getNome();?></li>
      </ol>
   </nav>
   <hr>
   <!--fim migalha de pão-->
   <!--Topo-->
    <div class="estrategiaTopo container-fluid">
        <div class="title-ensino">
            <h1><?=$x->getNome();?></h1>
        </div>
    </div>
      <!--fim topo-->
    <div id="sobreEstrategia">

      <div class="areaItem">
        <div class="left">
          <ul>
            <li><a href="qual-estrategia.php?cod=<?=$_GET['cod']?>" class="ativo">Qual é a estratégia?</a></li>
            <li><a href="principaisGanhos.php?cod=<?=$_GET['cod']?>">Quais são os principais ganhos da estratégia para os alunos?</a></li>
            <li><a href="organizarAlunos.php?cod=<?=$_GET['cod']?>">Maneiras de Organizar os alunos</a></li>
            <li><a href="preRequisitos.php?cod=<?=$_GET['cod']?>">Quais são os pre-requisitos para usar está estratégia?</a></li>
            <li><a href="principaisEstrategias.php?cod=<?=$_GET['cod']?>">Quais são as etapas para aplicar essa estratégia?</a></li>
            <li><a href="quantoTempo.php?cod=<?=$_GET['cod']?>">Quanto tempo leva para preparar e implementar a estratégia?</a></li>
            <li><a href="exemplosUso.php?cod=<?=$_GET['cod']?>">Artigos com exemplos de uso de estratégia </a></li>
            <li><a href="classificacao.php?cod=<?=$_GET['cod']?>">Classificação de Estratégia </a></li>
            <li><a href="referencias.php?cod=<?=$_GET['cod']?>">Referências</a></li>
          </ul>
        </div>
        <div class="rigth">
         <div class="conteudo">
           <h1>Qual é a estratégia?</h1>
           
             <?php $ql = $estrategiaDao->qualEstrategia($_GET['cod']);?>
             <p class="lead"><?= $ql->getQualEstrategia();?></p>
           
          </div>
        </div>
      </div>
    </div>


       <div class="artefatos"><!--artetos-->
         <!--incio container-fluid-->
         <div class="container-fluid">
           <div class="TitlePadrao">
             <h2>Artefatos Gerados</h2>
           </div>
           <div class="row"><!--row-->
            <div class="col-sm-3">
              <div class="imagem">
                <img src="assets/img/icone.jpg" alt="">
              </div>
              <div class="descricao">
                <h3>Artigos</h3>
                <a href="" class="btn btn-block">Download</a>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="imagem">
                <img src="assets/img/icone.jpg" alt="">
              </div>
              <div class="descricao">
                <h3>Artigos</h3>
                <a href="" class="btn btn-block">Download</a>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="imagem">
                <img src="assets/img/icone.jpg" alt="">
              </div>
              <div class="descricao">
                <h3>Artigos</h3>
                <a href="" class="btn btn-block">Download</a>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="imagem">
                <img src="assets/img/icone.jpg" alt="">
              </div>
              <div class="descricao">
                <h3>Artigos</h3>
                <a href="" class="btn btn-block">Download</a>
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col-sm-3"><div class="imagem">
              <img src="assets/img/icone.jpg" alt="">
            </div>
            <div class="descricao">
              <h3>Artigos</h3>
              <a href="" class="btn btn-block">Download</a>
            </div></div>
            <div class="col-sm-3"><div class="imagem">
              <img src="assets/img/icone.jpg" alt="">
            </div>
            <div class="descricao">
              <h3>Artigos</h3>
              <a href="" class="btn btn-block">Download</a>
            </div></div>
            <div class="col-sm-3">
              <div class="imagem">
                <img src="assets/img/icone.jpg" alt="">
              </div>
              <div class="descricao">
                <h3>Artigos</h3>
                <a href="" class="btn btn-block">Download</a>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="imagem">
                <img src="assets/img/icone.jpg" alt="">
              </div>
              <div class="descricao">
                <h3>Artigos</h3>
                <a href="" class="btn btn-block">Download</a>
              </div>
            </div>
           </div><!--fim Row-->
         </div>
         <!--fim Container-fluid-->
       </div><!--Fim fotos-->
       
    </div>
    <!--depoimento dos professores-->
    <!--Depoimentos-->
    <div id="depoimentos">
      <div class="container-fluid"><!--container-fluid-->
        <div class="row"><!--row-->
          <div class="col-sm depoimentoItem item"><!--col-->
            <div class="img">
                <img src="assets/img/pesquisador1.jpg" alt="">
            </div>
            <div class="depoimento">
              “Acompanho meu esposo que está fazendo tratamento na Clínica Fares. A médica nos pediu exames e está cuidando muito bem dele. Acho que aqui é diferente de todos os outros lugares que já fui porque sou sempre tratada com educação e atenção, por isso vou fazer meus exames também. A Clínica Fares é nota 10, recomendo sempre para meus familiares e amigos!” – Iraci Reis Gonçalves, 73, aposentada.
            </div>
          </div><!--fim col-->
          <div class="col-sm depoimentoItem item"><!--col-->
            <div class="img">
              <img src="assets/img/pesquisador1.jpg" alt="">
            </div>
            <div class="depoimento">
              “Acompanho meu esposo que está fazendo tratamento na Clínica Fares. A médica nos pediu exames e está cuidando muito bem dele. Acho que aqui é diferente de todos os outros lugares que já fui porque sou sempre tratada com educação e atenção, por isso vou fazer meus exames também. A Clínica Fares é nota 10, recomendo sempre para meus familiares e amigos!” – Iraci Reis Gonçalves, 73, aposentada.
            </div>
          </div><!--fim col-->
          <div class="col-sm depoimentoItem background"><!--col-->
            <h4>DEPOIMENTOS DOS PROFESSORES</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
          </div><!--fim col-->
        </div><!--fim row-->
      </div> <!--fim container-fluid-->
     
    </div>
    <!--Fim depoimento dos professores-->

      <section id="avaliacao">
          <div class="TitlePadrao">
            <h2>Avaliações Realizadas</h2>
          </div>

          <div class="container-fluid" style="margin: 0;padding: 0px;">
            <div class="informacoes">
              <div class="info padding-left padding-rigt">
                <h3>Informações gerais sobre a (s) classe (s) avaliada (s)?</h3>
                <p>As informações sobre a (s) classe (s) avaliada (s) podem ser visualizadas na tabela abaixo:</p>

              </div>
              
              <div class="div-conteudo">
                <table class="table-p">
                  <thead>
                    <tr class="back">
                      <th class="left">Universidade</th>
                      <th>Curso</th>
                      <th>Componente</th>
                      <th class="right">Alunos</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($turmas as $turma):?>
                      <tr class="linha">
                        <td class="left"><?=$turma->getUniversidade()?></td>
                        <td><?=$turma->getCurso()?></td>
                        <td><?=$turma->getComponente()?></td>
                        <td class="right"><?=$turma->getNEstudantes()?> alunos</td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>

              </div>
             
              <div class="row">
                <div class="col pontos-positivos">
                  <h4>Pontos positivos</h4>
             
                  <p><b>A estratégia apoia o aluno durante a modelagem</b></p>
                  <ul>
                    <li>O método torna possível abstrair melhor o problema</li>
                    <li>O método torna possível integrar a teoria com a prática</li>
                  </ul>
                </div>
                <div class="col pontos-negativos">
                  <h4>Pontos negativos</h4>
                  <p><b>A estratégia não apóia o aluno durante a modelagem</b></p>
                  <ul>
                    <li>A estratégia não permite ao aluno abstrair novos cenários</li>
                    <li>O aluno para utilizar a estratégia necessita de conhecimento prévio sobre o conteúdo que será ministrado</li>
                  </ul>
                </div>
              </div>


              <div class="percepcao-alunos">
                <h3>PERCEPÇÃO DOS ALUNOS SOBRE A ESTRATÉGIA </h3>
                <div class="item">
                  <h4>DIMENSÃO FATUAL DA TAXONOMIA DE BLOOM</h4>
                  <style>
                    #grafico span {
                        height: 10px; 
                        width: 10px; 
                        border-radius: 5px;
                        display: inline-block;
                    }
                </style>
                  <!-- <div class="imagem">
                    <img src="assets/img/bloom.png" alt="">
                  </div> -->

                  <div class="container-fluid" id="grafico">
        
                      <div class="row">
                          <div class="col">
                              <p class="lead text-success">Concordo Fortemente <span class="bg-success"></span></p>
                          </div>
                          <div class="col">
                              <p class="lead text-info">Concordo <span class="bg-info"></span></p>
                          </div>
                          <div class="col">
                              <p class="lead text-secondary">Neutro <span class="bg-secondary"></span></p>
                          </div>
                          <div class="col">
                              <p class="lead text-warning">Discordo <span class="bg-warning"></span></p>
                          </div>
                          <div class="col">
                              <p class="lead text-danger">Discordo Fortemente <span class="bg-danger"></span></p>
                          </div>
                          <div class="w-100"></div>
                          <div class="col-2">
                              <p class="lead">Item 1</p>
                          </div>
                          <div class="col">
                          
                              <div class="progress" style="height: 30px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico->getQ1ConcordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ1ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ1ConcordoFortemente()?>%</div>
                                  <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico->getQ1Concordo()?>%" aria-valuenow="<?=$grafico->getQ1Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ1Concordo()?>%</div>
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico->getQ1Neutro()?>%" aria-valuenow="<?=$grafico->getQ1Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ1Neutro()?>%</div>
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico->getQ1Discordo()?>%" aria-valuenow="<?=$grafico->getQ1Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ1Discordo()?>%</div>
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico->getQ1DiscordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ1DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ1DiscordoFortemente()?></div>
                              </div>
                          </div>
                  
                          <div class="w-100"></div>
                  
                          <div class="col-2">
                              <p class="lead">Item 2</p>
                          </div>
                          <div class="col">
                              <div class="progress" style="height: 30px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico->getQ2ConcordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ2ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ2ConcordoFortemente()?>%</div>
                                  <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico->getQ2Concordo()?>%" aria-valuenow="<?=$grafico->getQ2Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ2Concordo()?>%</div>
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico->getQ2Neutro()?>%" aria-valuenow="<?=$grafico->getQ2Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ2Neutro()?>%</div>
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico->getQ2Discordo()?>%" aria-valuenow="<?=$grafico->getQ2Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ2Discordo()?>%</div>
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico->getQ2DiscordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ2DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ2DiscordoFortemente()?></div>
                              </div>
                          </div>
                          <div class="w-100"></div>
                  
                          <div class="col-2">
                              <p class="lead">Item 3</p>
                          </div>
                          <div class="col">
                              <div class="progress" style="height: 30px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico->getQ3ConcordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ3ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ3ConcordoFortemente()?>%</div>
                                  <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico->getQ3Concordo()?>%" aria-valuenow="<?=$grafico->getQ3Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ3Concordo()?>%</div>
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico->getQ3Neutro()?>%" aria-valuenow="<?=$grafico->getQ3Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ3Neutro()?>%</div>
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico->getQ3Discordo()?>%" aria-valuenow="<?=$grafico->getQ3Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ3Discordo()?>%</div>
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico->getQ3DiscordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ3DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ3DiscordoFortemente()?>%</div>
                              </div>
                          </div>
                          <div class="w-100"></div>
                  
                          <div class="col-2">
                              <p class="lead">Item 4</p>
                          </div>
                          <div class="col">
                              <div class="progress" style="height: 30px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico->getQ4ConcordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ4ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ4ConcordoFortemente()?>%</div>
                                  <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico->getQ4Concordo()?>%" aria-valuenow="<?=$grafico->getQ4Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ4Concordo()?>%</div>
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico->getQ4Neutro()?>%" aria-valuenow="<?=$grafico->getQ4Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ4Neutro()?>%</div>
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico->getQ4Discordo()?>%" aria-valuenow="<?=$grafico->getQ4Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ4Discordo()?>%</div>
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico->getQ4DiscordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ4DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ4DiscordoFortemente()?>%</div>
                              </div>
                          </div>
                          <div class="w-100"></div>
                  
                          <div class="col-2">
                              <p class="lead">Item 5</p>
                          </div>
                          <div class="col">
                              <div class="progress" style="height: 30px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico->getQ5ConcordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ5ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ5ConcordoFortemente()?>%</div>
                                  <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico->getQ5Concordo()?>%" aria-valuenow="<?=$grafico->getQ5Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ5Concordo()?>%</div>
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico->getQ5Neutro()?>%" aria-valuenow="<?=$grafico->getQ5Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ5Neutro()?>%</div>
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico->getQ5Discordo()?>%" aria-valuenow="<?=$grafico->getQ5Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ5Discordo()?>%</div>
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico->getQ5DiscordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ5DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ5DiscordoFortemente()?>%</div>
                              </div>
                          </div>
                          <div class="w-100"></div>
                  
                          <div class="col-2">
                              <p class="lead">Item 6</p>
                          </div>
                          <div class="col">
                              <div class="progress" style="height: 30px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico->getQ6ConcordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ6ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ6ConcordoFortemente()?>%</div>
                                  <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico->getQ6Concordo()?>%" aria-valuenow="<?=$grafico->getQ6Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ6Concordo()?>%</div>
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico->getQ6Neutro()?>%" aria-valuenow="<?=$grafico->getQ6Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ6Neutro()?>%</div>
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico->getQ6Discordo()?>%" aria-valuenow="<?=$grafico->getQ6Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ6Discordo()?>%</div>
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico->getQ6DiscordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ6DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ6DiscordoFortemente()?>%</div>
                              </div>
                          </div>
                          <div class="w-100"></div>
                  
                          <div class="col-2">
                              <p class="lead">Item 7</p>
                          </div>
                          <div class="col">
                              <div class="progress" style="height: 30px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico->getQ7ConcordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ7ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ7ConcordoFortemente()?>%</div>
                                  <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico->getQ7Concordo()?>%" aria-valuenow="<?=$grafico->getQ7Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ7Concordo()?>%</div>
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico->getQ7Neutro()?>%" aria-valuenow="<?=$grafico->getQ7Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ7Neutro()?>%</div>
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico->getQ7Discordo()?>%" aria-valuenow="<?=$grafico->getQ7Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ7Discordo()?>%</div>
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico->getQ7DiscordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ7DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ7DiscordoFortemente()?>%</div>
                              </div>
                          </div>
                          <div class="w-100"></div>
                  
                          <div class="col-2">
                              <p class="lead">Item 8</p>
                          </div>
                          <div class="col">
                              <div class="progress" style="height: 30px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico->getQ8ConcordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ8ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ8ConcordoFortemente()?>%</div>
                                  <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico->getQ8Concordo()?>%" aria-valuenow="<?=$grafico->getQ8Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ8Concordo()?>%</div>
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico->getQ8Neutro()?>%" aria-valuenow="<?=$grafico->getQ8Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ8Neutro()?>%</div>
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico->getQ8Discordo()?>%" aria-valuenow="<?=$grafico->getQ8Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ8Discordo()?>%</div>
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico->getQ8DiscordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ8DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ8DiscordoFortemente()?>%</div>
                              </div>
                          </div>
                      </div>
                  </div>


                </div>
                <div class="item">
                  <h4>ATITUDES DOS ALUNOS SOBRE AS ESTRATÉGIAS ATIVAS DE APRENDIZAGEM</h4>
                  <!-- <div class="imagem">
                    <img src="assets/img/atitudes.png" alt="">
                  </div> -->


                  <div class="container-fluid" id="grafico">
        
                    <div class="row">
                        <div class="col">
                            <p class="lead text-success">Concordo Fortemente <span class="bg-success"></span></p>
                        </div>
                        <div class="col">
                            <p class="lead text-info">Concordo <span class="bg-info"></span></p>
                        </div>
                        <div class="col">
                            <p class="lead text-secondary">Neutro <span class="bg-secondary"></span></p>
                        </div>
                        <div class="col">
                            <p class="lead text-warning">Discordo <span class="bg-warning"></span></p>
                        </div>
                        <div class="col">
                            <p class="lead text-danger">Discordo Fortemente <span class="bg-danger"></span></p>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-2">
                            <p class="lead">Item 1</p>
                        </div>
                        <div class="col">
                        
                            <div class="progress" style="height: 30px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico2->getQ1ConcordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ1ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ1ConcordoFortemente()?>%</div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico2->getQ1Concordo()?>%" aria-valuenow="<?=$grafico2->getQ1Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ1Concordo()?>%</div>
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico2->getQ1Neutro()?>%" aria-valuenow="<?=$grafico2->getQ1Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ1Neutro()?>%</div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico2->getQ1Discordo()?>%" aria-valuenow="<?=$grafico2->getQ1Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ1Discordo()?>%</div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico2->getQ1DiscordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ1DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ1DiscordoFortemente()?></div>
                            </div>
                        </div>
                
                        <div class="w-100"></div>
                
                        <div class="col-2">
                            <p class="lead">Item 2</p>
                        </div>
                        <div class="col">
                            <div class="progress" style="height: 30px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico2->getQ2ConcordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ2ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ2ConcordoFortemente()?>%</div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico2->getQ2Concordo()?>%" aria-valuenow="<?=$grafico2->getQ2Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ2Concordo()?>%</div>
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico2->getQ2Neutro()?>%" aria-valuenow="<?=$grafico2->getQ2Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ2Neutro()?>%</div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico2->getQ2Discordo()?>%" aria-valuenow="<?=$grafico2->getQ2Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ2Discordo()?>%</div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico2->getQ2DiscordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ2DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ2DiscordoFortemente()?></div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                
                        <div class="col-2">
                            <p class="lead">Item 3</p>
                        </div>
                        <div class="col">
                            <div class="progress" style="height: 30px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico2->getQ3ConcordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ3ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ3ConcordoFortemente()?>%</div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico2->getQ3Concordo()?>%" aria-valuenow="<?=$grafico2->getQ3Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ3Concordo()?>%</div>
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico2->getQ3Neutro()?>%" aria-valuenow="<?=$grafico2->getQ3Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ3Neutro()?>%</div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico2->getQ3Discordo()?>%" aria-valuenow="<?=$grafico2->getQ3Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ3Discordo()?>%</div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico2->getQ3DiscordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ3DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ3DiscordoFortemente()?>%</div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                
                        <div class="col-2">
                            <p class="lead">Item 4</p>
                        </div>
                        <div class="col">
                            <div class="progress" style="height: 30px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico2->getQ4ConcordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ4ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ4ConcordoFortemente()?>%</div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico2->getQ4Concordo()?>%" aria-valuenow="<?=$grafico2->getQ4Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ4Concordo()?>%</div>
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico2->getQ4Neutro()?>%" aria-valuenow="<?=$grafico2->getQ4Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ4Neutro()?>%</div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico2->getQ4Discordo()?>%" aria-valuenow="<?=$grafico2->getQ4Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ4Discordo()?>%</div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico2->getQ4DiscordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ4DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ4DiscordoFortemente()?>%</div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                
                        <div class="col-2">
                            <p class="lead">Item 5</p>
                        </div>
                        <div class="col">
                            <div class="progress" style="height: 30px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico2->getQ5ConcordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ5ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ5ConcordoFortemente()?>%</div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico2->getQ5Concordo()?>%" aria-valuenow="<?=$grafico2->getQ5Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ5Concordo()?>%</div>
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico2->getQ5Neutro()?>%" aria-valuenow="<?=$grafico2->getQ5Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ5Neutro()?>%</div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico2->getQ5Discordo()?>%" aria-valuenow="<?=$grafico2->getQ5Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ5Discordo()?>%</div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico2->getQ5DiscordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ5DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ5DiscordoFortemente()?>%</div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                
                        <div class="col-2">
                            <p class="lead">Item 6</p>
                        </div>
                        <div class="col">
                            <div class="progress" style="height: 30px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico2->getQ6ConcordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ6ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ6ConcordoFortemente()?>%</div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico2->getQ6Concordo()?>%" aria-valuenow="<?=$grafico2->getQ6Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ6Concordo()?>%</div>
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico2->getQ6Neutro()?>%" aria-valuenow="<?=$grafico2->getQ6Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ6Neutro()?>%</div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico2->getQ6Discordo()?>%" aria-valuenow="<?=$grafico2->getQ6Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ6Discordo()?>%</div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico2->getQ6DiscordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ6DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ6DiscordoFortemente()?>%</div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                
                        <div class="col-2">
                            <p class="lead">Item 7</p>
                        </div>
                        <div class="col">
                            <div class="progress" style="height: 30px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico2->getQ7ConcordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ7ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ7ConcordoFortemente()?>%</div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico2->getQ7Concordo()?>%" aria-valuenow="<?=$grafico2->getQ7Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ7Concordo()?>%</div>
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico2->getQ7Neutro()?>%" aria-valuenow="<?=$grafico2->getQ7Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ7Neutro()?>%</div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico2->getQ7Discordo()?>%" aria-valuenow="<?=$grafico2->getQ7Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ7Discordo()?>%</div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico2->getQ7DiscordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ7DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ7DiscordoFortemente()?>%</div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                
                        <div class="col-2">
                            <p class="lead">Item 8</p>
                        </div>
                        <div class="col">
                            <div class="progress" style="height: 30px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico2->getQ8ConcordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ8ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ8ConcordoFortemente()?>%</div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico2->getQ8Concordo()?>%" aria-valuenow="<?=$grafico2->getQ8Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ8Concordo()?>%</div>
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico2->getQ8Neutro()?>%" aria-valuenow="<?=$grafico2->getQ8Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ8Neutro()?>%</div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico2->getQ8Discordo()?>%" aria-valuenow="<?=$grafico2->getQ8Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ8Discordo()?>%</div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico2->getQ8DiscordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ8DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ8DiscordoFortemente()?>%</div>
                            </div>
                        </div>
                        <div class="w-100"></div>


                        <div class="col-2">
                          <p class="lead">Item 9</p>
                          </div>
                          <div class="col">
                              <div class="progress" style="height: 30px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico2->getQ9ConcordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ9ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ9ConcordoFortemente()?>%</div>
                                  <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico2->getQ9Concordo()?>%" aria-valuenow="<?=$grafico2->getQ9Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ9Concordo()?>%</div>
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico2->getQ9Neutro()?>%" aria-valuenow="<?=$grafico2->getQ9Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ9Neutro()?>%</div>
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico2->getQ9Discordo()?>%" aria-valuenow="<?=$grafico2->getQ9Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ9Discordo()?>%</div>
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico2->getQ9DiscordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ9DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ9DiscordoFortemente()?>%</div>
                              </div>
                          </div>
                          <div class="w-100"></div>

                          <div class="col-2">
                              <p class="lead">Item 10</p>
                          </div>
                          <div class="col">
                              <div class="progress" style="height: 30px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico2->getQ10ConcordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ10ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ10ConcordoFortemente()?>%</div>
                                  <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico2->getQ10Concordo()?>%" aria-valuenow="<?=$grafico2->getQ10Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ10Concordo()?>%</div>
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico2->getQ10Neutro()?>%" aria-valuenow="<?=$grafico2->getQ10Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ10Neutro()?>%</div>
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico2->getQ10Discordo()?>%" aria-valuenow="<?=$grafico2->getQ10Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ10Discordo()?>%</div>
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico2->getQ10DiscordoFortemente()?>%" aria-valuenow="<?=$grafico2->getQ10DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico2->getQ10DiscordoFortemente()?>%</div>
                              </div>
                          </div>




                    </div>
                
                
                </div>
                




                </div>
              </div>
            </div>
          </div>
      </section>
      <?php
      require('pages/footer.php')
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="assets/js/requisicoesAssicronasApendizagemSemelante.js"></script>
</body>
</html>