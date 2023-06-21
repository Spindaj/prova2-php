<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login acesso</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div>
    <form name="login" method="post" action="">
        <p>
            <label for="noome">Nome:</label>
            <input type="text" name="nome" maxlength="40" required>
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" maxlength="30">
        </p>
        <p>
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" maxlength="30">
        </p>
        <p>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" maxlength="30">
        </p>
        <p>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" maxlength="30">
        </p>
        <p>
            <button>
            <input type="submit" name="enviar" value="Enviar">
            </button>
        </p>
        <?php
            if(isset($_POST["enviar"])){
                //recupera os dados do formulário
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $cpf = $_POST["cpf"];
                $telefone = $_POST["telefone"];

                session_start(); //inicia a sessão
                $_SESSION["nome"] = $nome; //armazena nas variáveis da sessão
                $_SESSION["email"] = $email;
                $_SESSION["cpf"] = $cpf;
                $_SESSION["telefone"] = $telefone;
            }
        ?>

        <p><a href="home.php">Voltar</a></p>
    </div>
    </form>
</body>
</html>