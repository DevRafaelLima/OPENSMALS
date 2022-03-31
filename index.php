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
                        <img src="assets/img/logo-completa.png" class="img-fluid" alt="">
                        
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
          
          <?php require('pages/momentosAprendizagem.php')?>         
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
                              <p>O método <b>Aprendizagem Baseada em Sistemas Familiares</b> permite que os estudantes investiguem um sistema semelhante ao que se pretende modelar e, com isso, realizar a modelagem do novo sistema utilizando como base as características identificadas no sistema escolhido (Stoecklin et al., 1998). </p>
                              <a href="aprendizagemSemelhante.php" class="btn btn-block btn-success">Saiba mais</a>
                            </div><!--fim item-->
                          </div>
                          <div class="col"><!--item-->
                            <div class="item"><!--item-->
                              <h4>Jigsaw</h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>O <b>Jigsaw</b> é uma técnica proposta por Aronson et al. (1998) e consiste em dividir o material de aprendizagem em tarefas parciais. Cada aluno da equipe é como uma peça de quebra-cabeças que executará uma tarefa parcial, que ao final do processo será compartilhada com todos os outros membros da equipe (Deibel, 2005).</p>
                              <a href="serraVaiVem.php" class="btn btn-block btn-success">Saiba mais</a>
                            </div><!--fim item-->
                          </div><!--fim item-->
                          <div class="col"><!--item-->
                            <div class="item"><!--item-->
                              <h4>Learning from Erroneous Examples</h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>O <b>Learning from Errouneous Examples</b> (ErrEx) é um método baseado em Aprendizagem Ativa que engaja os estudantes em um exercício de aprendizagem ativa, oferecendo a oportunidade para uma learning experience construtiva e colaborativa através dos exemplos errados (Grosse e Renkl, 2007). Este método instrui os estudantes a encontrar, explicar e corrigir os erros (McLaren et al., 2016).</p>
                              <a href="exemplosErroneos.php" class="btn btn-block btn-success">Saiba mais</a>
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
                              <h4>Métodos de Aprendizagem utilizando dados de Inspeções</h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>O <b>Método de Aprendizagem utilizando Dados de Inspeções</b> tem por objetivo apoiar os estudantes que estão aprendendo como modelar os diagramas corretamente. Para isso, os estudantes utilizam comentários de inspeção de diagramas previamente inspecionados por outros estudantes (Kinjo et al., 2006).  </p>
                              <a href="estrategiaInspecao.php" class="btn btn-block btn-success">Saiba mais</a>
                            </div><!--fim item-->
                          </div>
                          <div class="col">
                            <div class="item"><!--item-->
                              <h4>Multimodal Approach</h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>Esta é uma abordagem multimodal que visa fomentar as habilidades de modelagem dos estudantes que são relevantes para a indústria, combinando uma abordagem orientada por projeto com várias atividades que focam em princípios de aprendizagem ativa (Thevathayan e Hamilton, 2017). </p>
                              <a href="abordagemMultimodal.php" class="btn btn-block btn-success">Saiba mais</a>
                            </div><!--fim item-->
                          </div>
                          <div class="col">
                            <div class="item"><!--item-->
                              <h4>Negative Examples</h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>O <b>Negative Examples</b> é um método que fornece diretrizes associadas a descrições e exemplos negativos de modelagem, para que estes sejam incorporados no ambiente de ensino de modelagem, fazendo com que os estudantes aprendam observando como se deve fazer uma modelagem de forma correta a partir de exemplos negativos trabalhados em sala de aula. </p>
                              <a href="ExemplosNegativos.php" class="btn btn-block btn-success">Saiba mais</a>
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
                              <h4>PBL + LBL Double Track Teaching Method</h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>Esse método de ensino baseia-se na Lecture based learning (LBL) e  Problem based learnig (PBL). Neste método de ensino o professor ensina a base teórica relacionada ao problema real e combina enquanto os estudantes estão trabalhando para a resolução de um problemas real. </p>
                              <a href="metodoEnsino.php" class="btn btn-block btn-success">Saiba mais</a>
                            </div><!--fim item-->
                          </div><!--fim item-->
                          <div class="col"><!--item-->
                            <div class="item"><!--item-->
                              <h4>Positive Examples</h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>O <b>Positive Examples</b> é um método que fornece diretrizes associadas a descrições e exemplos positivos de modelagem, para que estes sejam incorporados no ambiente de ensino de modelagem, fazendo com que os estudantes aprendam observando como se deve fazer uma modelagem de forma correta.</p>
                              <a href="exemploPositivo.php" class="btn btn-block btn-success">Saiba mais</a>
                            </div><!--fim item-->
                          </div><!--fim item-->
                          <div class="col"><!--item-->
                            <div class="item"><!--item-->
                              <h4>Problem Based Learning (PBL) Adapted </h4>
                              <h5>Qual é a estratégia?</h5>
                              <p>O PBL Adapted é um método pedagógico que enfatiza o papel de um problema, no qual os alunos são responsáveis pela sua aprendizagem (Boud e Feletti, 1997). Este método ajuda os alunos a desenvolver estratégias e construir conhecimento. Formação de equipe e distribuição de papéis são essenciais para o uso de PBL (Richardson e Delaney, 2009).</p>
                              <a href="aprendizagemProblemas.php" class="btn btn-block btn-success">Saiba mais</a>
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
                                <h4>Think-Pair-Square</h4>
                                <h5>Qual é a estratégia?</h5>
                                <p>O Método <b>Think-Pair-Square</b> foi concebido para promover aprendizagens, discussões ativas e para auxiliar na resolução de problemas de forma cooperativa entre os estudantes (Lyman, 1981; Millis e Cottel, 1998). 
                                <br>O método Think-Pair-Square é considerado idealmente quando se deseja que os estudantes obtenham experiências de trabalho colaborativo (Lyman, 1981).</p>
                                <a href="think.php" class="btn btn-block btn-success">Saiba mais</a>
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
                        <p>Discente de Engenharia de Software na Universidade Federal do Pampa - UNIPAMPA</p>
                        <div class="redesSocias">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fas fa-envelope-open-text"></i></a>
                      </div>
                      </div>
                  </div><!--fim col-->
                  <div class="col-sm item"><!--col-->
                    <div class="imagem">
                      <img src="assets/img/pesquisador3.png" alt="">
                    </div>
                    <div class="info">
                      <h5>Tayana Conte</h5>
                      <p>Discente de Engenharia de Software na Universidade Federal do Pampa - UNIPAMPA</p>
                      <div class="redesSocias">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fas fa-envelope-open-text"></i></a>
                      </div>
                    </div>
                  </div><!--fim col-->
                  <div class="col-sm item"><!--col-->
                    <div class="imagem">
                      <img src="assets/img/pesquisador1.jpg" alt="">
                    </div>
                    <div class="info">
                      <h5>Williamson Silva</h5>
                      <p>Discente de Engenharia de Software na Universidade Federal do Pampa - UNIPAMPA</p>
                      <div class="redesSocias">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fas fa-envelope-open-text"></i></a>
                      </div>
                    </div>
                  </div><!--fim col-->
                  <div class="col-sm item"><!--col-->
                    <div class="imagem">
                      <img src="assets/img/Rafael.jpg" alt="">
                    </div>
                    <div class="info">
                      <h5>Rafael S. de Lima</h5>
                      <p>Desenvolvedor fullstack e discente de Engenharia de Software na Universidade Federal do Pampa - UNIPAMPA</p>
                      <div class="redesSocias">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fas fa-envelope-open-text"></i></a>
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