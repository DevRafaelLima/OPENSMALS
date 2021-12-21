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
          <li class="breadcrumb-item active" aria-current="page">Escolhendo Estratégias</li>
        </ol>
     </nav>
     <hr>
     <!--fim migalha de pão-->
      <!--Topo-->
    <div class="estrategiaTopo container-fluid">
        <div class="areaInterna">
            <h1>Escolhendo Estratégias</h1>
        </div>
    </div>
    <!--fim topo-->
    <div class="container estrategias" style="display: flex; justify-content: center;">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdkpcN9m_f4ykrGn3gkQwwqoktph853yKLSEbPVuWEye4ydjg/viewform?embedded=true" width="700" height="800" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
    </div>
    <?php
      require('pages/footer.php')
    ?>
</body>
</html>