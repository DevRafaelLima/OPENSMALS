<?php
require ("conexao.php");
require ("dao/EstrategiaDaoMysql.php");
require ("dao/TurmaDaoMysql.php");

$conn = new Conexao();
$estrategiaDao = new EstrategiaDaoMysql($conn);
$turmaDao = new TurmaDaoMysql($conn);
$allEstrategias = $estrategiaDao->findAllAtivas();
$allTurmas = $turmaDao->findAllCod($_SESSION['cod']);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS3 estilizado-->
    <link rel="stylesheet" href="assets/css/formAvaliacao.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>OpenSMALS</title>
  </head>
  <body>

  <div class="container">

      <form action="validaAvalEstrategia.php" method="GET">
          <!--info do professor-->
          <div class="form-group">
              <label for="prof.">professor</label>
              <input type="hidden" name="cod" class="form-control" value="<?=$_SESSION['cod']?>">
              <input type="text" name="professor" class="form-control" value="<?=$_SESSION['nome']?>" readonly>
          </div>
          <div class="form-group">
              <label for="">Estratégia que será avaliada</label>
              <select name="estrategia" id="estrategia" class="form-control">
                  <option value=""></option>
                  <?php foreach($allEstrategias as $item):?>
                    <option value="<?=$item->getCod()?>"><?=$item->getNome()?></option>
                  <?php endforeach;?>  
                  
              </select>
          </div>
          <!--info da turma-->
          <div id="turma">
              <div id="alerta"></div>
              <h4>Informações da turma</h4>

              <div>
                  A turma que você está preste a avaliar já foi avaliada alguma vez?

                    <div class="form-check">
                        <input class="form-check-input" onclick="sim()" type="radio" name="exampleRadios" id="exampleRadios1" value="opcao1">
                        <label class="form-check-label" for="exampleRadios1">
                            Sim
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" onclick="nao()" type="radio" name="exampleRadios" id="exampleRadios2" value="opcao2">
                        <label class="form-check-label" for="exampleRadios2">
                            Não
                        </label>
                    </div>
                    

              </div>

              <div class="form-group" id="nomeTurma">
                  <label for="nomeTurma">Nome:</label>
                  <input type="text" class="form-control" name="turmaName">
              </div>

              <div class="form-group" id="turmaSelect">
                <label for="">Selecine a turma</label>
                <select name="turmaNameSelect" class="form-control">
                    <option value=""></option>
                    <?php foreach($allTurmas as $turma):?>
                        <option value="<?=$turma->getCod()?>"><?=$turma->getNome()?></option>
                    <?php endforeach;?>  
                    
                </select>
             </div>
      
              <div class="form-group">
                  <label for="universidade">universidade</label>
                  <input type="text" class="form-control" id="nomeUniversidade" name="universidade">
              </div>
      
              <div class="form-group">
                  <label for="curso">Curso</label>
                  <input type="text" class="form-control" id="nomeCurso" name="nameCurso">
              </div>
              
              <div class="form-group">
                  <label for="componente">Componente: </label>
                  <input type="text" class="form-control" id="nomeComponente" name="componente">
              </div>
              <div class="form-group">
                  <label for="pontosPositivos">Pontos positivos: </label>
                  <textarea name="pontosPositivos" id="pontosPositivos" class="form-control"></textarea>
              </div>
              <div class="form-group">
                  <label for="pontosNegativos">Pontos negativos: </label>
                  <textarea name="pontosNegativos" id="pontosNegativos" class="form-control"></textarea>
              </div>
      
              <input type="button" id="nextInfoTurma" class="btn btn-primary" value="Next">
          </div>
          <!--fim info turma-->
          <hr>
          <!--info alunos-->
          <div id="formAluno">
              <h4>Infomações dos alunos</h4>
              <div class="controlador">
                  <div id="alertAlunos">
                        
                  </div>
                  <div class="form-group row">
                      <label for="numeroAlunos" class="col-2 col-form-label">Número que participaram da avaliação: </label>
                      <div class="col-3">
                          <input type="number" class="form-control" id="numeroAlunos" name="numeroAlunos">
                      </div>
                      <label for="questionario" class="col-1 col-form-label">Questionário aplicado</label>
                      <div class="col-3">

                          <select name="questionario" id="questionario" class="form-control">
                              <option value=""></option>
                              <option value="1">DIMENSÃO FATUAL DA TAXONOMIA DE BLOOM</option>
                              <option value="2">ATITUDES DOS ALUNOS SOBRE AS ESTRATÉGIAS ATIVAS DE APRENDIZAGEM</option>
                          </select>
                      </div>
      
                      <div class="col-3">
                          <button type="button" class="btn btn-block btn-primary" onclick="gerarAlunos()">+</button>
                      </div>
      
                  </div>
              </div>
              
              <div id="alunos">
                  
             </div>
                  <button class="btn btn-primary" id="btn_avaliar" type="submit">Avaliar</button>
          <!--fim info alunos-->
      </form>
  </div>

<script src="assets/js/avaliacaoEstrategia.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>