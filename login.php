<?php
require("conexao.php");
if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sistema de login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<style type="text/css">
		.container {
			display: flex;
		}
		form {
			max-width: 500px;
            
		}

	</style>
</head>
<body>
	
	<div class="container justify-content-center align-items-center" style="height: 100vh;">
		
		<form method="post" action="validaLogin.php">
			<?php if(isset($_GET['acao']) && $_GET['acao'] == 1) {?>
			<div class="alert alert-warning">
				Preencha todos os campos
			</div>
			<?php } else if (isset($_GET['acao']) && $_GET['acao'] == 2){?>
			<div class="alert alert-warning">
				Email não está cadastrado.
			</div>	
			<?php } else if(isset($_GET['acao']) && $_GET['acao'] == 3) {?>
			<div class="alert alert-warning">
				Senha inválida
			</div>
			<?php } ?>
			<div class="form-group">
				<label for="email">Email: </label>
				<input type="email" name="email" id="email" class="form-control">
			</div>

			<div class="form-group">
				<label for="senha">Senha: </label>
				<input type="password" name="senha" id="senha" class="form-control">
			</div>

			<input type="submit" value="logar" class="btn btn-primary">

		</form>
	</div>
</body>
</html>