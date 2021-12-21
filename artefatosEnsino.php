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
          <li class="breadcrumb-item active" aria-current="page">Artefatos de Ensino</li>
        </ol>
     </nav>
     <hr>
     <!--fim migalha de pão-->

     <!--topo-->
  <div class="estrategiaTopo container-fluid">
      <div class="areaInterna">
          <h1>Artefatos de Ensino</h1>
      </div>
  </div>
  <!--fim topo-->
  <!--Artefatos de Ensino -->
  <div class="container artefatos">
    <h3>Questionários que podem ser usados ​​para métodos baseados em estratégias de aprendizagem ativa</h3>
    <h4>Caro instrutor, a seguir adicionamos alguns questionários que você pode usar. </h4>

    <ul>
      <li>Percepção do Questionário de Avaliação de Aprendizagem sobre a estratégia
        <ul>
          <li>Se preferir, uma versão do questionário está <a href="">disponível aqui.</a></li>
        </ul>
      </li>
      <li>Quadro de grupo de foco: se os instrutores desejam coletar dados qualitativos, fornecemos um quadro de grupo de foco.</li>
      <li>Planilha para análise de dados sobre as percepções dos alunos sobre as estratégias.</li>
    </ul>

    <div class="container">
      <div class="row">
        <div class="col artefatosItem">
          <div class="imagem">
            <img src="assets/img/icone-planilha.png" class="img-fluid" alt="">
          </div>
          <div class="descricao">
            <h3>Planilha: Coleta de dados</h3>
            <a href="https://docs.google.com/a/unipampa.edu.br/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxhY3RpdmVsZWFybmluZ21ldGhvZHN8Z3g6N2YwZmE3OGM4NDYxZjQ4ZA" class="btn btn-block">Download</a>
          </div>
        </div>
        <div class="col artefatosItem">
          <div class="imagem">
            <img src="assets/img/ms-word.png" class="img-fluid" alt="">
          </div>
          <div class="descricao">
            <h3>Quadro Grupo Focal</h3>
            <a href="https://docs.google.com/a/unipampa.edu.br/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxhY3RpdmVsZWFybmluZ21ldGhvZHN8Z3g6MTQ2MzZlNDYzMDhkNmI5Mw" class="btn btn-block">Download</a>
          </div>
        </div>
        <div class="col artefatosItem">
          <div class="imagem">
            <img src="assets/img/ms-word.png" class="img-fluid" alt="">
          </div>
          <div class="descricao">
            <h3>Questionário de Avaliação</h3>
            <a href="https://docs.google.com/a/unipampa.edu.br/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxhY3RpdmVsZWFybmluZ21ldGhvZHN8Z3g6M2ZmZjcwYzFmY2NiZDJlMw" class="btn btn-block">Download</a>
          </div>
        </div>
      </div>
    </div>

  </div>
  <?php
    require('pages/footer.php')
  ?>
</body>
</html>