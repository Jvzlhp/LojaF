<?php 
if(isset($_POST['submit'])){
    include_once('config.php');
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $senha = $_POST['senha'];
  $genero = $_POST['gender'];

   $result = mysqli_query($conexao, "INSERT INTO tb_user(nomeUser,sobrenomeUser,emailUser,telefoneUser,senhaUser,generoUser) 
   VALUES('$nome','$sobrenome','$email','$tel','$senha','$genero')");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="img/games.svg" alt="">
        </div>
        <div class="form">
            <form action="cadastro.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <input id="firstname" type="text" name="nome" placeholder="Nome :" required>
                    </div>

                    <div class="input-box">
                        <input id="lastname" type="text" name="sobrenome" placeholder="Sobrenome :">
                    </div>
                    <div class="input-box">
                        <input id="email" type="email" name="email" placeholder="E-mail :" required>
                    </div>

                    <div class="input-box">
                        <input id="number" type="tel" name="tel" placeholder="Telefone :">
                    </div>

                    <div class="input-box">
                        <input id="password" type="password" name="senha" placeholder="Senha :" required>
                    </div>


                    <div class="input-box">
                        <input id="senha" type="password" name="ConfirmSenha" placeholder="Confirme a Senha :" required>
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero:</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="gender" value="Feminino">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="gender" value="Masculino">
                            <label for="male">Masculino</label>
                        </div>


                        <div class="gender-input">
                            <input id="none" type="radio" name="gender" value="Prefiro não dizer">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit" name="submit" value="enviar">Continuar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>