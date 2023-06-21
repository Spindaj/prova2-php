<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar os dados salvos na sessão</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <main>
    <?php
        session_start();
        echo "<h3>EXIBE OS DADOS SALVOS NA SESSÃO</h3>";
        $nome = $_SESSION["nome"];//passa os dados salvos na sessão e armazena na variável
        $email = $_SESSION["email"];
        $cpf = $_SESSION["cpf"];
        $telefone = $_SESSION["telefone"];

        echo "<strong>Nome: </strong>" . $nome;
        echo "<br><strong>E-mail: </strong>" . $email;
        echo "<br><strong>cpf: </strong>" . $cpf;
        echo "<br><strong>telefone: </strong>" . $telefone;
    ?>

    <p><a href="home.php">Voltar</a></p>
    </main>
</body>
</html>