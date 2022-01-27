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
        require('pages/header.php');
        $escolhendoE = $estrategiaDao->findEscolhendoEstrategia();
    ?>
   

    <hr>
    <!--Migalha de pão-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Página inicial</a></li>
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
            <?php foreach($escolhendoE as $estrategia): ?>
            <div class="col-sm-4">
                <!--item-->
                    <div class="item">
                        <div class="topo" style=" background-color: #791e94;">
                            <h3><?= $estrategia->getNome();?></h3>
                        </div>
                        <div class="conteudo">
                            <p>
                                <a class="btn btn-primary btn-block" data-toggle="collapse" href="#aprendizagemSemelhantes<?=$estrategia->getCod();?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Qual é essa estratégia?
                                </a>
                                
                              </p>
                              <div class="collapse" id="aprendizagemSemelhantes<?=$estrategia->getCod();?>">
                                <div class="card card-body">
                                    <?= $estrategia->getQualEstrategia();?>
                                    <a href="estrategia-noticia.php?cod=<?=$estrategia->getCod();?>" class="btn btn-block">Saiba mais</a>
                                </div>
                              </div>
                        </div>
            
                    </div>
                    <!--fim Item-->
                    
                </div>
                <?php endforeach?>
            
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