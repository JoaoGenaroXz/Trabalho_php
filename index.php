<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Login</title>
</head>
<body>
    <div class = "Login">
        <div class = "L-login">
            <h1>Trabalho de PHP</h1>
            <img src="XZone_SemFundo.png" class="L-login" alt="XZone_SemFundo.png">
        </div>
        <div class = "R-login">
            <div class = "card_login" action="login.php"  method="POST">
                <h1>Login</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type = "text" name = "usuario" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type = "password" name = "senha" placeholder="Senha">
                </div>
                <button class = "bt_login">Login</button>
            </div>
        </div>
        <?php
        if (isset($_GET['msg'])) 
        {
          $mensagem_ext = $_GET['msg'] == 'erro_login' ? 'Login inválido!' : 'Dados insuficientes!';
        ?>
        <div class="painel painel-footer text-center">
            <?php echo $mensagem_ext; ?>
          </div>
        <?php
        }
        ?>
    </div>
</body>
</html>