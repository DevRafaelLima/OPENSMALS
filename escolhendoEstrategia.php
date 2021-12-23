<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolhendo Estratégia</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <!-- CSS3 estilizado-->
     <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/css/escolhendoEstrategia.css">
     <!--Font Awesome-->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php
      require('pages/header.php')
    ?>
   

    <hr>
    <!--Migalha de pão-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Página inicial</a></li>
          <li class="breadcrumb-item active" aria-current="page">Estratégias de Ensino</li>
        </ol>
     </nav>
     <hr>
     <!--fim migalha de pão-->
      <!--Topo-->
        <div class="estrategiaTopo container-fluid">
            <div class="areaInterna">
                <h1>Estratégias de Ensino</h1>
            </div>
        </div>
        <!--fim topo-->
     <!--Conteudo-->
     <div class="container" id="escolhendoEstrategia">
         <!--row-->
        <div class="row">
            <div class="col">
                <!--item-->
                
                <div class="item">
                    <div class="topo" style=" background-color: #791e94;">
                        <h3>Aprendizagem baseada em sistemas semelhantes</h3>
                    </div>
                    <div class="conteudo">
                        <p>
                            <a class="btn btn-primary btn-block" data-toggle="collapse" href="#aprendizagemSemelhantes" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Qual é essa estratégia?
                            </a>
                            
                          </p>
                          <div class="collapse" id="aprendizagemSemelhantes">
                            <div class="card card-body">
                                A  estratégia de Aprendizagem Baseada em Sistemas Similares permite que os alunos investiguem um sistema semelhante ao que pretendem modelar e, portanto, realizem a modelagem do novo sistema com base nas características identificadas no sistema escolhido  ( Stoecklin  et al. , 1998) . 
                                <a href="aprendizagemSemelhante.php" class="btn btn-block">Saiba mais</a>
                            </div>
                          </div>
                    </div>
        
                </div>
                <!--fim Item-->
            </div>
            <div class="col">
                <!--item-->
                <div class="item">
                    <div class="topo" style=" background-color: #9bc53d;">
                        <h3>Jigsaw</h3>
                    </div>
                    <div class="conteudo">
                        <p>
                            <a class="btn btn-primary btn-block" data-toggle="collapse" href="#serraVaivem" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Qual é essa estratégia?
                            </a>
                            
                        </p>
                          <div class="collapse" id="serraVaivem">
                            <div class="card card-body">
                                Jigsaw  é uma estratégia proposta por Aronson et al. (1998), e ec é uma estratégia que consiste em dividir o material de aprendizagem em tarefas parciais. Cada aluno da equipe é como uma peça de quebra-cabeça que realizará uma tarefa parcial, que ao final do processo será compartilhada com todos os demais membros da equipe  ( Deibel, 2005).
                                <a href="serraVaiVem.php" class="btn btn-block">Saiba mais</a>
                            </div>
                          </div>
                    </div>
                </div>
                <!--fim Item-->
            </div>
            <div class="col">
                <!--item-->
                <div class="item">
                    <div class="topo" style=" background-color: #4e937a;">
                        <h3>Learning from Erroneous Examples</h3>
                    </div>
                    <div class="conteudo">
                        <p>
                            <a class="btn btn-primary btn-block" data-toggle="collapse" href="#erroneos" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Qual é essa estratégia?
                            </a>
                            
                        </p>
                          <div class="collapse" id="erroneos">
                            <div class="card card-body">
                                Aprender com  errôneas  Exemplos (ErrEx) é uma estratégia de aprendizagem activa que envolve os alunos em um exercício de aprendizagem ativa, oferecendo a oportunidade para uma experiência de aprendizagem construtiva e colaborativa através dos exemplos errados (Grosse e Renkl, 2007). Essa estratégia instrui os alunos a encontrar, explicar e corrigir erros (McLarenet al., 2016).
                                <a href="exemplosErroneos.php" class="btn btn-block">Saiba mais</a>
                            </div>
                          </div>
                    </div>
                </div>
                <!--fim Item--> 
            </div>
            <div class="w-100"></div>
            <div class="col">
                <!--item-->
                <div class="item">
                    <div class="topo" style=" background-color: #4e937a;">
                        <h3>Métodos de Aprendizagem utilizando dados de Inspeções</h3>
                    </div>
                    <div class="conteudo">
                        <p>
                            <a class="btn btn-primary btn-block" data-toggle="collapse" href="#estrategia" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Qual é essa estratégia?
                            </a>
                            
                        </p>
                          <div class="collapse" id="estrategia">
                            <div class="card card-body">
                                A estratégia baseada em inspeção visa apoiar os alunos que estão aprendendo como modelar diagramas corretamente. Para isso, os alunos usam comentários de inspeção de diagramas previamente inspecionados por outros alunos   ( Kinjo et al. , 2006 ). 
                                <a href="estrategiaInspecao.php" class="btn btn-block">Saiba mais</a>
                            </div>
                          </div>
                    </div>
                </div>
                <!--fim Item-->
            </div>
            <div class="col">
                <!--item-->
                <div class="item">
                    <div class="topo" style=" background-color: #9bc53d;">
                        <h3>Multimodal Approach</h3>
                    </div>
                    <div class="conteudo">
                        <p>
                            <a class="btn btn-primary btn-block" data-toggle="collapse" href="#multimodal" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Qual é essa estratégia?
                            </a>
                            
                        </p>
                          <div class="collapse" id="multimodal">
                            <div class="card card-body">
                                Esta é uma estratégia baseada em uma abordagem multimodal que visa promover as habilidades de modelagem do aluno que são relevantes para a indústria, combinando uma abordagem orientada a projetos multi-atividades que se concentra em princípios de aprendizagem ativa  ( Thevathayan e Hamilton, 2017) . 
                                <a href="abordagemMultimodal.php" class="btn btn-block">Saiba mais</a>
                            </div>
                          </div>
                    </div>
                </div>
                <!--fim Item-->
            </div>
            <div class="col">
                <!--item-->
                <div class="item">
                    <div class="topo" style=" background-color: #791e94;">
                        <h3>Negative Examples</h3>
                    </div>
                    <div class="conteudo">
                        <p>
                            <a class="btn btn-primary btn-block" data-toggle="collapse" href="#exemplosNegativos" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Qual é essa estratégia?
                            </a>
                            
                        </p>
                          <div class="collapse" id="exemplosNegativos">
                            <div class="card card-body">
                                Exemplos negativos é um método de ensino baseado em uma estratégia de aprendizagem ativa que fornece problemas associados a descrições e exemplos de modelagem negativa para que sejam incorporados ao ambiente de ensino de modelagem. 
                                <a href="ExemplosNegativos.php" class="btn btn-block">Saiba mais</a>
                            </div>
                          </div>
                    </div>
                </div>
                <!--fim Item-->
            </div>
            <div class="w-100"></div>
            <div class="col">
                <!--item-->
                <div class="item">
                    <div class="topo" style=" background-color: #791e94;">
                        <h3>PBL + LBL Double Track Teaching Method</h3>
                    </div>
                    <div class="conteudo">
                        <p>
                            <a class="btn btn-primary btn-block" data-toggle="collapse" href="#metodoEnsino" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Qual é essa estratégia?
                            </a>
                            
                        </p>
                          <div class="collapse" id="metodoEnsino">
                            <div class="card card-body">
                                Esta estratégia é baseada na aprendizagem baseada em palestras (LBL) e na aprendizagem baseada em problemas (PBL) . Nesta estratégia de ensino, o instrutor ensina a base teórica relacionada ao problema real e combina enquanto os alunos trabalham para a resolução do problema real. 
                                <a href="metodoEnsino.php" class="btn btn-block">Saiba mais</a>
                            </div>
                          </div>
                    </div>
                </div>
                <!--fim Item-->
            </div>
            <div class="col">
                <!--item-->
                <div class="item">
                    <div class="topo" style=" background-color: #9bc53d;">
                        <h3>Positive Examples</h3>
                    </div>
                    <div class="conteudo">
                        <p>
                            <a class="btn btn-primary btn-block" data-toggle="collapse" href="#exemplosPositivos" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Qual é essa estratégia?
                            </a>
                            
                        </p>
                          <div class="collapse" id="exemplosPositivos">
                            <div class="card card-body">
                                Exemplos positivos é uma estratégia que fornece diretrizes associadas a descrições e exemplos positivos de modelagem, de modo que sejam incorporados ao ambiente de ensino de modelagem, permitindo que os alunos aprendam observando como modelar corretamente.
                                <a href="exemploPositivo.php" class="btn btn-block">Saiba mais</a>
                            </div>
                          </div>
                    </div>
                </div>
                <!--fim Item-->
            </div>
            <div class="col">
                <!--item-->
                <div class="item">
                    <div class="topo" style=" background-color: #4e937a;">
                        <h3>Problem Based Learning (PBL) Adapted</h3>
                    </div>
                    <div class="conteudo">
                        <p>
                            <a class="btn btn-primary btn-block" data-toggle="collapse" href="#problemasAdaptado" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Qual é essa estratégia?
                            </a>
                            
                        </p>
                          <div class="collapse" id="problemasAdaptado">
                            <div class="card card-body">
                                O PBL Adaptado é uma estratégia pedagógica que enfatiza o papel de um problema em que os alunos são responsáveis ​​por sua aprendizagem  ( Boud e  Feletti, 1997) . Essa estratégia ajuda os alunos a desenvolver estratégias e construir conhecimento. A formação de equipes e a distribuição de papel são essenciais para o uso do PBL. ( Richardson e Delaney, 2009 ).
                                <a href="aprendizagemProblemas.php" class="btn btn-block">Saiba mais</a>
                            </div>
                          </div>
                    </div>
                </div>
                <!--fim Item-->
            </div>
            <div class="w-100"></div>
            <div class="col-4">
                <!--item-->
                <div class="item">
                    <div class="topo" style=" background-color: #4e937a;">
                        <h3>Think-Pair-Square</h3>
                    </div>
                    <div class="conteudo">
                        <p>
                            <a class="btn btn-primary btn-block" data-toggle="collapse" href="#square" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Qual é essa estratégia?
                            </a>
                            
                        </p>
                          <div class="collapse" id="square">
                            <div class="card card-body">
                                O Think-Pair-Square é projetado para promover o aprendizado, a discussão ativa e a resolução cooperativa de problemas entre os alunos (Lyman, 1981; Millis e Cottel, 1998) . O Think-Pair-Square é idealmente considerado quando se deseja que os alunos ganhem experiências de trabalho colaborativo. 
                                <a href="think.php" class="btn btn-block">Saiba mais</a>
                            </div>
                          </div>
                    </div>
                </div>
                <!--fim Item-->
            </div>
        </div>
         <!--fim row-->
     </div>
     <!--Fim conteúdo-->

     <?php
      require('pages/footer.php')
    ?>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>