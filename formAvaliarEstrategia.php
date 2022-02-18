<?php
require ("conexao.php");
require ("dao/EstrategiaDaoMysql.php");
$conn = new Conexao();
$estrategiaDao = new EstrategiaDaoMysql($conn);
$allEstrategias = $estrategiaDao->findAllAtivas();
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
              <input type="hidden" class="form-control" value="01">
              <input type="text" class="form-control" value="nome do professor" readonly>
          </div>
          <div class="form-group">
              <label for="">Estratégia que será avaliada</label>
              <select name="" id="estrategia" class="form-control">
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
              <div class="form-group">
                  <label for="nomeTurma">Nome:</label>
                  <input type="text" class="form-control" id="nomeTurma">
              </div>
      
              <div class="form-group">
                  <label for="universidade">universidade</label>
                  <input type="text" class="form-control" id="nomeUniversidade">
              </div>
      
              <div class="form-group">
                  <label for="curso">Curso</label>
                  <input type="text" class="form-control" id="nomeCurso">
              </div>
              
              <div class="form-group">
                  <label for="componente">Componente: </label>
                  <input type="text" class="form-control" id="nomeComponente">
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

                          <select name="querionario" id="questionario" class="form-control">
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
                  <button class="btn btn-primary" type="submit">Avaliar</button>
          <!--fim info alunos-->
      </form>
  </div>

<script src="assets/js/avaliacaoEstrategia.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>