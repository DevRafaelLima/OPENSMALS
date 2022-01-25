<?php
require("conexao.php");
if(empty($_SESSION['email'])){
?>
<script type="text/javascript">window.location.href="index.php"</script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!--css personalizado-->
<link rel="stylesheet" href="assets/css/minha-area.css">
<link rel="stylesheet" href="assets/css/style.css">

    <title>Minha Área</title>
    
</head>
<body>
    <?php if(isset($_GET['excluir']) && $_GET['excluir'] == 'ok'):?>
        <div class="alert alert-success" role="alert">
            Estrátegia excluida com sucesso.
        </div>
    <?php elseif(isset($_GET['excluir']) && $_GET['excluir'] == 'off'): ?>
        <div class="alert alert-warning" role="alert">
              Problema ao excluir estratégia.
        </div>
    <?php elseif(isset($_GET['update']) && $_GET['update'] == 'success'):?>
        <div class="alert alert-success" role="alert">
            Estratégia Atualizada com secesso.
        </div>
    <?php elseif(isset($_GET['update']) && $_GET['update'] == 'error'):?>
        <div class="alert alert-warning" role="alert">
            Erro ao atualizar estrátegia.
        </div>
    <?php elseif(isset($_GET['avall']) && $_GET['avall']=='success'):?>
        <div class="alert alert-success" role="alert">
            Estratégia avaliada com secesso.
        </div>
    <?php elseif(isset($_GET['avall']) && $_GET['avall']=='error'):?> 
    <div class="alert alert-warning" role="alert">
            Erro ao avaliar estrátegia.
        </div>
    <?php endif ?>    
    <header class="header bg-dark">
        <ul class="nav justify-content-end  text-white">
            
            <li class="nav-item">
                <a class="nav-link text-white" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="sair.php">Sair</a>
            </li>
        </ul>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-dark text-white" id="lado-direito"><!--lado direito-->
                <h1>Dashboard</h1>
                <div class="links">
                    <div class="row">
                        <div class="col-5">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="home.php" role="tab" aria-controls="v-pills-home">Home</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="add-estrategia.php" role="tab" aria-controls="v-pills-profile">Adicionar Estratégia</a>
                            <?php if(isset($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == 1): ?>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="validaEstrategia-menu.php" role="tab" aria-controls="v-pills-messages">Validar Estratégia</a>
                            <?php endif ?>
                            <?php if(isset($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == 1) :?>
                            <a class="nav-link" href="all-estrategias.php">Todas as estratégias</a>
                            <?php else: ?>
                                <a class="nav-link" href="minhas-estrategias.php">Minhas estratégias</a>
                            <?php endif ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div><!--fim lado direito-->
            <div class="col" id="lado-esquerdo"> <!--lado esquerdo-->
               <?php require("home.php");?>
            </div> <!--fim lado esquerdo-->
        </div>
    </div>


<script src="assets/js/minha-area.js"></script>
</body>
</html>