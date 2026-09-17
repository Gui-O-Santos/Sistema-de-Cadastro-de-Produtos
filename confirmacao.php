<?php

// --------------------------------------------------
// RECEBENDO OS DADOS DO FORMULÁRIO
// --------------------------------------------------

$codigo = $_POST['codigo'] ?? '';
$nome = $_POST['nome'] ?? '';
$categoria = $_POST['categoria'] ?? '';
$preco = $_POST['preco'] ?? '';
$quantidade = $_POST['quantidade'] ?? '';

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <title>Confirmação</title>

    <link rel="stylesheet" href="style.css">

</head>

<body class="Cadastro">

    <div class="mensagem">

        <h1>⚠️​ Confirme as Informações</h1>

        <p>
            Estes dados serão inseridos no arquivo CSV
        </p>


        <div class="dados">

            <strong>Código:</strong>
            <?php echo htmlspecialchars($codigo); ?>

            <br><br>

            <strong>Produto:</strong>
            <?php echo htmlspecialchars($nome); ?>

            <br><br>

            <strong>Categoria:</strong>
            <?php echo htmlspecialchars($categoria); ?>

            <br><br>

            <strong>Preço:</strong>
            R$ <?php echo htmlspecialchars($preco); ?>

            <br><br>

            <strong>Quantidade:</strong>
            <?php echo htmlspecialchars($quantidade); ?>

        </div>


        <a href="index.php">
            Cadastrar Produto
        </a>


        <a href="abrir_csv.php" class="verde">
            Abrir arquivo CSV
        </a>

    </div>

</body>

</html>
