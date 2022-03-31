<?php
require ("Conexao.php");
require ("dao/GerarGraficoDao.php");
require ("dao/TurmaDaoMysql.php");

$conn = new Conexao();
$GerarGraficoDao = new GerarGraficoDao($conn);
$turmaDao = new TurmaDaoMysql($conn);

$turma = $turmaDao->findByCod($_GET['turma']);
if($_GET['questionario'] == 1){
    $grafico = $GerarGraficoDao->graficoUnico1($_GET['turma'], $_GET['codEstrategia'], $_GET['questionario']);
} else if($_GET['questionario'] == 2){
    $grafico = $GerarGraficoDao->graficoUnico2($_GET['turma'], $_GET['codEstrategia'], $_GET['questionario']);
}

// Change the line below to your timezone!
date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y h:i:s a', time());
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

    <form style="margin: 15px;">
        <input type="button" value="Imprimir relatório" onClick="window.print()" class="btn btn-primary"/>
        <a href="minha-area.php" class="btn btn-primary">Home</a>
    </form>
  <div class="container">
      <p>Relatório gerado em: <?=$date?></p>
  </div>
<style>
    #grafico span {
        height: 20px; 
        width: 20px; 
        border-radius: 10px;
        display: inline-block;
    }
</style>


<!--table com informaçoões da turma-->
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nome da turma</th>
      <th scope="col">Universidade</th>
      <th scope="col">Curso</th>
      <th scope="col">Componente</th>
      <th scope="col">Alunos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th><?=$turma->getNome()?></th>
      <td><?=$turma->getUniversidade()?></td>
      <td><?=$turma->getCurso()?></td>
      <td><?=$turma->getComponente()?></td>
      <td><?=$grafico->getNEstudante()?></td>
    </tr>
    
   
  </tbody>
</table>
<!--fim table com informações da turma-->




<?php if($_GET['questionario'] == 1):?>

    <div class="container-fluid" id="grafico">
        <h2>Dimensão Factual da Taxonomia de Bloom</h2>
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
                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico->getQ2DiscordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ2DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ2DiscordoFortemente()?>%</div>
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
<?php elseif($_GET['questionario'] == 2):?>
    <div class="container-fluid" id="grafico">
        <h2>Dimensão Factual da Taxonomia de Bloom</h2>
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
            <div class="w-100"></div>


            <div class="col-2">
                <p class="lead">Item 9</p>
            </div>
            <div class="col">
                <div class="progress" style="height: 30px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico->getQ9ConcordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ9ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ9ConcordoFortemente()?>%</div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico->getQ9Concordo()?>%" aria-valuenow="<?=$grafico->getQ9Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ9Concordo()?>%</div>
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico->getQ9Neutro()?>%" aria-valuenow="<?=$grafico->getQ9Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ9Neutro()?>%</div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico->getQ9Discordo()?>%" aria-valuenow="<?=$grafico->getQ9Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ9Discordo()?>%</div>
                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico->getQ9DiscordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ9DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ9DiscordoFortemente()?>%</div>
                </div>
            </div>
            <div class="w-100"></div>

            <div class="col-2">
                <p class="lead">Item 10</p>
            </div>
            <div class="col">
                <div class="progress" style="height: 30px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?=$grafico->getQ10ConcordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ10ConcordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ10ConcordoFortemente()?>%</div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: <?=$grafico->getQ10Concordo()?>%" aria-valuenow="<?=$grafico->getQ10Concordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ10Concordo()?>%</div>
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$grafico->getQ10Neutro()?>%" aria-valuenow="<?=$grafico->getQ10Neutro()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ10Neutro()?>%</div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$grafico->getQ10Discordo()?>%" aria-valuenow="<?=$grafico->getQ10Discordo()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ10Discordo()?>%</div>
                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$grafico->getQ10DiscordoFortemente()?>%" aria-valuenow="<?=$grafico->getQ10DiscordoFortemente()?>" aria-valuemin="0" aria-valuemax="100"><?=$grafico->getQ10DiscordoFortemente()?>%</div>
                </div>
            </div>
            


        </div>
    </div>

<?php endif;?>

<div class="container">
    <h2>Relatório Geral</h2>
    <p class="lead">
        texto ilustrativo para informar sobre a quantidade de turmas que já foram avaliadas, bem como mais algumas informações
    </p>
</div>
<div class="container-fluid" id="grafico">
    <h2>Dimensão Factual da Taxonomia de Bloom</h2>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>