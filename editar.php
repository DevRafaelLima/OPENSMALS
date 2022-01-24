<?php
require("conexao.php");
require("dao/EstrategiaDaoMysql.php");
$conexao = new Conexao();
$estrategiaDao = new EstrategiaDaoMysql($conexao);
$estrategia = $estrategiaDao->findById($_GET['cod']);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>

    <div class="container">

        <form action="update-estrategia.php" method="GET">
            <input type="hidden" value="<?= $_GET['cod']?>" name="cod">
            <div class="input-group-prepend">
                <span class="input-group-text" name="cod"><?=$_GET['cod']?></span>
                
            </div>
            <div class="form-group row">
                <label for="nome" class="col-sm-2 col-form-label">Nome: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="nome" name="nome" value="<?=$estrategia->getNome();?>">

                </div>  
            </div>

            <div class="form-group row">
                <label for="qual-estrategia" class="col-sm-2 col-form-label">Qual é a estratégia:</label>
                <div class="col-sm-10">
                <textarea name="qual-estrategia" class="form-control" id="qual-estrategia" cols="30" rows="10" placeholder="Qual é a estratégia"><?=$estrategia->getQualEstrategia();?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Quais são os principais ganhos da estratégia para os alunos: </label>
                <div class="col-sm-10">
                <textarea name="principais-ganhos" class="form-control" id="principais-ganhos" placeholder="Quais são os principais ganhos da estratégia para os alunos:" cols="30" rows="10"><?=$estrategia->getPrincipaisGanhos();?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="organizar-alunos" class="col-sm-2 col-form-label">Maneiras de organizar os alunos: </label>
                <div class="col-sm-10">
                <textarea name="organizar-alunos"  class="form-control" id="organizar-alunos" placeholder="Maneiras de organizar os alunos:" cols="30" rows="10"><?=$estrategia->getOrganizarAlunos()?></textarea>
                </div>
            </div>


            <div class="form-group row">
                <label for="pre-requisitos" class="col-sm-2 col-form-label">Quais são os pré-requisitos para usar esta estratégia: </label>
                <div class="col-sm-10">
                <textarea name="pre-requisitos"  class="form-control" id="pre-requisitos" placeholder="Quais são os pré-requisitos para usar esta estratégia:" cols="30" rows="10"><?=$estrategia->getPreRequisitos();?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Quais são as etapas para aplicar essa estratégia: </label>
                <div class="col-sm-10"> 
                <textarea name="etapas" class="form-control" id="etapas" placeholder="Quais são as etapas para aplicar essa estratégia:" cols="30" rows="10"><?=$estrategia->getEtapas();?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Quanto tempo leva para preparar e implementar a estratégia: </label>
                <div class="col-sm-10">
                <textarea name="implementar-estrategia" id="principais-ganhos" placeholder="Quanto tempo leva para preparar e implementar a estratégia:" class="form-control" cols="30" rows="10"><?=$estrategia->getImplementarEstrategia();?></textarea>
                </div>
            </div>

            
            

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Artigos com exemplos de uso de estratégia: </label>
                    <div class="col-sm-10">
                        <textarea name="artigo" id="artigo" placeholder="Artigos com exemplos de uso de estratégia:" class="form-control" cols="30" rows="10"><?=$estrategia->getArtigo()?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Classificação de Estratégia: </label>
                    <div class="col-sm-10">
                        <textarea name="estrategia" id="estrategia" placeholder="Classificação de Estratégia:" class="form-control" cols="30" rows="10"><?=$estrategia->getClassificacao();?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Referências: </label>
                    <div class="col-sm-10">
                        <textarea name="referencia" id="referencia" placeholder="Referências:" class="form-control" cols="30" rows="10"><?=$estrategia->getReferencia();?></textarea>
                    </div>
                </div>

            </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                    </div>
                </div>
            </form>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>