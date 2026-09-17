
<?php

// --------------------------------------------------
// RECEBENDO OS DADOS DO FORMULÁRIO
// --------------------------------------------------

$codigo = $_POST['codigo'] ?? '';
$nome = $_POST['nome'] ?? '';
$categoria = $_POST['categoria'] ?? '';
$preco = $_POST['preco'] ?? '';
$quantidade = $_POST['quantidade'] ?? '';


// --------------------------------------------------
// VERIFICANDO SE TODOS OS CAMPOS FORAM PREENCHIDOS
// --------------------------------------------------

if (
    empty($codigo) ||
    empty($nome) ||
    empty($categoria) ||
    empty($preco) ||
    empty($quantidade)
) {

    die("Erro: todos os campos devem ser preenchidos.");

}


// --------------------------------------------------
// NOME DO ARQUIVO CSV
// --------------------------------------------------

$arquivo = "produtos.csv";


// --------------------------------------------------
// VERIFICA SE O ARQUIVO JÁ EXISTE
// --------------------------------------------------

$arquivo_existe = file_exists($arquivo);


// --------------------------------------------------
// ABRE O ARQUIVO PARA GRAVAÇÃO
// "a" = adiciona dados no final do arquivo
// --------------------------------------------------

$fp = fopen($arquivo, "a");


// --------------------------------------------------
// SE FOR UM NOVO ARQUIVO, CRIA O CABEÇALHO
// --------------------------------------------------

if (!$arquivo_existe) {

    fputcsv(
        $fp,
        array(
            "Codigo",
            "Nome",
            "Categoria",
            "Preco",
            "Quantidade"
        ),
        ";"
    );

}


// --------------------------------------------------
// INSERE OS DADOS DO PRODUTO
// --------------------------------------------------

fputcsv(
    $fp,
    array(
        $codigo,
        $nome,
        $categoria,
        $preco,
        $quantidade
    ),
    ";"
);


// --------------------------------------------------
// FECHA O ARQUIVO
// --------------------------------------------------

fclose($fp);


// --------------------------------------------------
// EXIBE A MENSAGEM DE SUCESSO
// --------------------------------------------------

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Cadastro realizado</title>

    <link rel="stylesheet" href="style.css">

</head>

<body class="Cadastro">
    

    <div class="mensagem">

        <h1>✓ Cadastro realizado!</h1>

        <p>
            Os dados foram inseridos no arquivo CSV com sucesso.
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
            Cadastrar outro produto
        </a>


        <a href="abrir_csv.php" class="verde">
            Abrir arquivo CSV
        </a>

    </div>
    
</body>

</html>


