<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Logn</title>
</head>
<body>


    <div class="main-login">
        <div class="left-login">
             <img src="img/video.svg" class="left-image" alt="imggame">
        </div>
        <div class="right-login">
            <div class="card-login">
            <h1>Login!</h1>
                <form action="POST">
                    <div class="textfield">
                        <input type="email" name="usuario" placeholder="Email:">
                    </div>
                    <div class="textfield">
                        <input type="password" name="senha" placeholder="Senha:">
                    </div>
                    <button class="btn-login" type="submit" value="enviar">Entrar</button>
                </form>
                <p>Não tem uma conta ainda? <br><a href="cadastro.php">Criar uma conta!</a></p>
            </div>
        </div>
    </div>
</body>
</html>