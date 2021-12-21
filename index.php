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
    <title>OpenSMALS</title>
  </head>
  <body>
  <?php
      require('pages/header.php')
  ?>

    <!--área que fica logo abaixo do menu, chamei de topo por não ter nenhum nome mais criativo :(-->
        <div class="topo">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" style="height: 100%;">
                <div class="carousel-item active" id="slider1">
                  <div class="container-fluid">
                    <div class="row"><!--row-->
                      <div class="col item-texto"><!--col-->
                        imagem
                      </div><!--fim col-->
                      <div class="col item-img"><!--col-->
                        conteudo
                      </div><!--fim col-->
                    </div><!--fim row-->
                  </div>
                  <!--<img class="d-block w-100" src="assets/img/background1.jg" alt="Primeiro Slide">-->
                </div>
                <div class="carousel-item" id="slider2"><!--slider 2-->
                  <div class="container-fluid">
                    imagem
                  </div>
                </div><!--fim slider 2-->
                <div class="carousel-item" id="slider3"><!--slider 3-->
                  <div class="container-fluid">
                    imagem
                  </div>
                </div><!--fim slider-->
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
              </a>
            </div>
        </div>
<!--estratégias-->
        <div id="estrategias">
          <div class="TitlePadrao" style="color: #fff;">
            <h2>Momentos de Aprendizagem</h2>
            <div class="br"></div>
          </div>
          
            <div class="container">
              <div class="row">
                <div class="col"><!--col'-->
                  <div class="conteudo">
                    <h2>Começo da prendizagem</h2>
                    <p>(Quando os alunos ainda não aprenderam o conceito sobre o modelo)</p>
                    <div class="conteudoEstrategiasInfo">
                      <h4>Ao longo do curso(o instrutor atua apenas como moderador da atividade)</h4>
                      <ul>
                        <li><a href="#">Serra de vaivém</a></li>
                        <li><a href="#">Aprendizagem baseada em problemas (PBL) adaptado</a></li>
                      </ul>
                      
                      <h4>Ao Longo do curso (o instrutor apresenta os conceitos para a classe primeiro)</h4>
                      <ul>
                        <li><a href="#">Abordagem Multimodal</a></li>
                        <li><a href="#">Método de ensino da trilha dupla PBL+LBL</a></li>
                      </ul>

                      <h4>Em algumas aulas (máximo três aulas)</h4>
                      <ul>
                        <li><a href="#">Ji gsaw</a></li>
                        <li><a href="#">Abordagem Multimodal</a></li>
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
                        <li><a href="#">Exemplos positivos</a></li>
                        <li><a href="#">Exemplos negativos</a></li>
                      </ul>
                      
                      <h4>Os alunos precisam praticar modelagem</h4>
                      <ul>
                        <li><a href="#">Think-Pair-Square</a></li>
                        <li><a href="#">Aprendizagem baseada em sistemas semelhantes</a></li>
                      </ul>

                      <h4>Os alunos precisam aprimorar ainda mais o conhecimento de modelagem de software</h4>
                      <ul>
                        <li><a href="#">Aprendendo com exemplos errôneos</a></li>
                        <li><a href="#">Estratégias baseada em inspeção</a></li>
                      </ul>
                    </div>
                  </div>
                </div><!--fim col-->
              </div>
            </div>
        </div>

        <div id="estrategiaMomentoAprendizagem">
          <div class="TitlePadrao" style="color: #fff;">
            <h2>Estratégias de Ensino</h2>
            <div class="br"></div>
        </div>
          
          
         
          <div class="container-fluid"> <!--container fluid-->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active areaMetodo">
                  <div class="d-block w-100">
                    <div class="areaMetodoConteudo"><!--areaMetodoContedo-->
                      <div class="container">
                        <div class="row">
                          <div class="col">
                            <div class="item"><!--item-->
                              <h4>Aprendizagem baseada em sistemas semelhantes</h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>A  estratégia de Aprendizagem Baseada em Sistemas Similares permite que os alunos investiguem um sistema semelhante ao que pretendem modelar e, portanto, realizem a modelagem do novo sistema com base nas características identificadas no sistema escolhido  ( Stoecklin  et al. , 1998) .  </p>
                              <a href="aprendizagemSemelhante.html" class="btn btn-block btn-success">Saiba mais</a>
                            </div><!--fim item-->
                          </div>
                          <div class="col"><!--item-->
                            <div class="item"><!--item-->
                              <h4>Serra de vaivém</h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>Jigsaw  é uma estratégia proposta por Aronson et al. (1998), e ec é uma estratégia que consiste em dividir o material de aprendizagem em tarefas parciais. Cada aluno da equipe é como uma peça de quebra-cabeça que realizará uma tarefa parcial, que ao final do processo será compartilhada com todos os demais membros da equipe  ( Deibel, 2005).</p>
                              <a href="serraVaiVem.html" class="btn btn-block btn-success">Saiba mais</a>
                            </div><!--fim item-->
                          </div><!--fim item-->
                          <div class="col"><!--item-->
                            <div class="item"><!--item-->
                              <h4>Aprendendo com exemplos errôneos</h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>Aprender com  errôneas  Exemplos (ErrEx) é uma estratégia de aprendizagem activa que envolve os alunos em um exercício de aprendizagem ativa, oferecendo a oportunidade para uma experiência de aprendizagem construtiva e colaborativa através dos exemplos errados (Grosse e Renkl, 2007). Essa estratégia instrui os alunos a encontrar, explicar e corrigir erros (McLarenet al., 2016).</p>
                              <a href="exemplosErroneos.html" class="btn btn-block btn-success">Saiba mais</a>
                            </div><!--fim item-->
                          </div><!--fim item-->
                        </div>
                      </div>
                    </div><!--fim areaMetodoConteudo-->
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="d-block w-100">
                    <div class="areaMetodoConteudo"><!--areaMetodoContedo-->
                      <div class="container">
                        <div class="row">
                          <div class="col">
                            <div class="item"><!--item-->
                              <h4>Estratégia baseada em inspeção</h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>A estratégia baseada em inspeção visa apoiar os alunos que estão aprendendo como modelar diagramas corretamente. Para isso, os alunos usam comentários de inspeção de diagramas previamente inspecionados por outros alunos   ( Kinjo et al. , 2006 ). </p>                              </p>
                              <a href="estrategiaInspecao.html" class="btn btn-block btn-success">Saiba mais</a>
                            </div><!--fim item-->
                          </div>
                          <div class="col">
                            <div class="item"><!--item-->
                              <h4>Abordagem Multimodal</h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>Esta é uma estratégia baseada em uma abordagem multimodal que visa promover as habilidades de modelagem do aluno que são relevantes para a indústria, combinando uma abordagem orientada a projetos multi-atividades que se concentra em princípios de aprendizagem ativa  ( Thevathayan e Hamilton, 2017) . </p>
                              <a href="abordagemMultimodal.html" class="btn btn-block btn-success">Saiba mais</a>
                            </div><!--fim item-->
                          </div>
                          <div class="col">
                            <div class="item"><!--item-->
                              <h4>Exemplos Negativos </h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>Exemplos negativos é um método de ensino baseado em uma estratégia de aprendizagem ativa que fornece problemas associados a descrições e exemplos de modelagem negativa, para que sejam incorporados ao ambiente de ensino de modelagem. </p>
                              <a href="ExemplosNegativos.html" class="btn btn-block btn-success">Saiba mais</a>
                            </div><!--fim item-->
                          </div>
                        </div>
                      </div>
                    </div><!--fim areaMetodoConteudo-->
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="d-block w-100">
                    <div class="areaMetodoConteudo"><!--areaMetodoContedo-->
                      <div class="container">
                        <div class="row">
                          <div class="col"><!--item-->
                            <div class="item"><!--item-->
                              <h4>Método de ensino de trilha dupla PBL + LBL </h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>
                                Esta estratégia é baseada na aprendizagem baseada em palestras (LBL) e na aprendizagem baseada em problemas (PBL) . Nesta estratégia de ensino, o instrutor ensina a base teórica relacionada ao problema real e combina enquanto os alunos trabalham para a resolução do problema real. </p>
                              <a href="metodoEnsino.html" class="btn btn-block btn-success">Saiba mais</a>
                            </div><!--fim item-->
                          </div><!--fim item-->
                          <div class="col"><!--item-->
                            <div class="item"><!--item-->
                              <h4>Exemplos positivos</h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>Exemplos positivos é uma estratégia que fornece diretrizes associadas a descrições e exemplos positivos de modelagem, de modo que sejam incorporados ao ambiente de ensino de modelagem, permitindo que os alunos aprendam observando como modelar corretamente.</p>
                              <a href="exemploPositivo.html" class="btn btn-block btn-success">Saiba mais</a>
                            </div><!--fim item-->
                          </div><!--fim item-->
                          <div class="col"><!--item-->
                            <div class="item"><!--item-->
                              <h4>Aprendizagem baseada em problemas (PBL) adaptado </h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>O PBL Adaptado é uma estratégia pedagógica que enfatiza o papel de um problema em que os alunos são responsáveis ​​por sua aprendizagem  ( Boud e  Feletti, 1997) . Essa estratégia ajuda os alunos a desenvolver estratégias e construir conhecimento. A formação da equipe e a distribuição de papel são essenciais para o uso do PBL. ( Richardson e Delaney, 2009 ).</p>
                              <a href="aprendizagemProblemas.html" class="btn btn-block btn-success">Saiba mais</a>
                            </div><!--fim item-->
                          </div><!--fim item-->
                        </div>
                      </div>
                    </div><!--fim areaMetodoConteudo-->
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="d-block w-100">
                    <div class="areaMetodoConteudo">
                        <div class="container">
                          <div class="row">
                            <div class="col">
                              <div class="item" style="width: 300px;"><!--item-->
                                <h4>Think-Pair-Square </h4>
                                <h5>Qual é a estratégia?</h5>
                                <p>O Think-Pair-Square é projetado para promover o aprendizado, a discussão ativa e a resolução cooperativa de problemas entre os alunos (Lyman, 1981; Millis e Cottel, 1998) . O Think-Pair-Square é idealmente considerado quando se deseja que os alunos ganhem experiências de trabalho colaborativo. </p>
                                <a href="think.html" class="btn btn-block btn-success">Saiba mais</a>
                              </div><!--fim item-->
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div><!--fim inner-->
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
              </a>
            </div>
          </div><!--fim container fluid-->
          
        </div>
       

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
                <h4>DEPOIMENTOS</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
              </div><!--fim col-->
            </div><!--fim row-->
          </div> <!--fim container-fluid-->
         
        </div><!--fim depoimentos-->
        <!--espaço reservado para as informação dos pesquisadores-->
        <div id="pesquisadores"><!--pesquisadores-->
          
            <div class="container"><!--container-->
              <div class="TitlePadrao" style="color: #000; margin-top: 30px;">
                <h2>Pesquisadores</h2>
                <div class="br"></div>
              </div>
                <div class="row"><!--row-->
                  <div class="col-sm item"><!--col-->
                      <div class="imagem">
                          <img src="assets/img/pesquisador2.jpg" alt="">
                      </div>
                      <div class="info">
                        <h5>Igor Steinmacher</h5>
                        <p><span>Email: <a href="#">igor.steinmacher@nau.edu</a></span> <br> Discente de Engenharia de Software na Universidade Federal do Pampa - UNIPAMPA</p>
                        <div class="redesSocias">
                          <a href="#"><i class="fab fa-facebook"></i></a>
                          <a href="#"><i class="fab fa-instagram"></i></a>
                          <a href="#"><i class="fab fa-twitter"></i></a>
                          <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                      </div>
                  </div><!--fim col-->
                  <div class="col-sm item"><!--col-->
                    <div class="imagem">
                      <img src="assets/img/pesquisador3.png" alt="">
                    </div>
                    <div class="info">
                      <h5>Tayana Conte</h5>
                      <p><span>Email: <a href="#">tayana@icomp.ufam.edu.br</a></span> <br> Discente de Engenharia de Software na Universidade Federal do Pampa - UNIPAMPA</p>
                      <div class="redesSocias">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div><!--fim col-->
                  <div class="col-sm item"><!--col-->
                    <div class="imagem">
                      <img src="assets/img/pesquisador1.jpg" alt="">
                    </div>
                    <div class="info">
                      <h5>Williamson Silva</h5>
                      <p><span>Email: <a href="#">williamson.silva@unespar.edu.br</a></span> <br> Discente de Engenharia de Software na Universidade Federal do Pampa - UNIPAMPA</p>
                      <div class="redesSocias">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div><!--fim col-->
                  <div class="col-sm item"><!--col-->
                    <div class="imagem">
                      <img src="assets/img/Rafael.jpg" alt="">
                    </div>
                    <div class="info">
                      <h5>Rafael Lima</h5>
                      <p><span>Email: <a href="#">rafaelsdl2.aluno@unipampa.edu.br</a></span> <br> Discente de Engenharia de Software na Universidade Federal do Pampa - UNIPAMPA</p>
                      <div class="redesSocias">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div><!--fim col-->
                </div><!--fim row-->
            </div><!--fim container-->
        </div><!--fim pesquisadores-->
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