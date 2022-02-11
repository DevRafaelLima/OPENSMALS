<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cadastre-se</title>
  </head>
  <body id="cadastre_se">
    <div class="container">
        <div class="row">
            <div class="col-md logo">
                <div class="imagem">
    
                </div>
                <div class="conteudo">
                   <p>Cadastre-se ao sistema da Arena x para poder agendar seus horários. Caso já tenha conta, acesse a área de login.</p>
                   <a href="login.php">Login</a>
                </div>

            </div>
            <div class="col-md formulario">
                <h1>Cadastre-se</h1>
                <div class="info">
                    Os campos que tiverem com <span>*</span> são obrigatórios
                </div>
                <div class="alert">
                        <?php if(isset($_GET['error']) && $_GET['error'] == "emailExistente") :?>
                            <div class="alert alert-warning" role="alert">
                                Email já cadastrado, faça seu login <a href="login.php">aqui</a>.
                            </div>
                        <?php endif ?>    
                </div>
                <form action="valida-cadastro.php" method="POST">
                    <div class="form-group">
                        <label for="name">Nome <span>*</span></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Seu nome"s>
                    </div>
                    <div class="form-group">
                        <label for="email">Endereço de email <span>*</span></label>
                        <input type="email" class="form-control" id="email"placeholder="Seu email">
                        <small class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                    </div>
                    <div class="form-group">
                        <label for="data_nascimento">Data de nascimento: <span>*</span></label>
                        <input type="date" class="form-control" name="data_nascimento" id="data_nascimento">
                    </div>
                    <div class="form-group">
                        <label for="contato">Contato: <span>*</span></label>
                        <input type="text" class="form-control" name="contato" id="contato" placeholder="Seu contato">
                        <label for="whatsapp">É seu whatsapp</label>
                        <div class="form-check">
                            <input class="form-check-input whatsapp" type="radio" name="whatsapp" value="1">
                            <label class="form-check-label" for="exampleRadios1">
                                Sim
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input whatsapp" type="radio" name="whatsapp" value="0">
                            <label class="form-check-label" for="exampleRadios2">
                                Não
                            </label>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" class="form-control" id="instagram">
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha <span>*</span></label>
                        <input type="password" class="form-control" id="senha" placeholder="Senha">
                    </div>
                    <div class="form-group">
                        <label for="senha">Confirmar senha <span>*</span></label>
                        <input type="password" class="form-control" id="confirmarSenha" placeholder="Senha">
                    </div>
                    <button type="button" class="btn btn-primary btn-block" onclick="validaForm()">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>