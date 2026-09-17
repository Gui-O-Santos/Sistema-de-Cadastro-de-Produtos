
<?php

$arquivo = "produtos.csv";


// --------------------------------------------------
// VERIFICA SE O ARQUIVO EXISTE
// --------------------------------------------------

if (!file_exists($arquivo)) {

    die("
        <h2>Arquivo ainda não existe.</h2>
        <p>Cadastre pelo menos um produto primeiro.</p>
        <a href='index.php'>Voltar para o cadastro</a>
    ");

}


// --------------------------------------------------
// ABRE O ARQUIVO CSV
// --------------------------------------------------

$fp = fopen($arquivo, "r");


// --------------------------------------------------
// LÊ O CABEÇALHO
// --------------------------------------------------

$cabecalho = fgetcsv($fp, 1000, ";");

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Produtos Cadastrados</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container_CSV">

    <h1>Produtos Cadastrados</h1>


    <table>

        <thead>

            <tr>

                <?php

                // Exibe o cabeçalho

                foreach ($cabecalho as $coluna) {

                    echo "<th>" .
                         htmlspecialchars($coluna) .
                         "</th>";

                }

                ?>

            </tr>

        </thead>


        <tbody>

            <?php

            // Contador de produtos

            $total = 0;


            // Lê cada linha do CSV

            while (($dados = fgetcsv($fp, 1000, ";")) !== false) {

                echo "<tr>";

                foreach ($dados as $valor) {

                    echo "<td>" .
                         htmlspecialchars($valor) .
                         "</td>";

                }

                echo "</tr>";

                $total++;

            }


            // Fecha o arquivo

            fclose($fp);

            ?>

        </tbody>

    </table>


    <div class="quantidade">

        Total de produtos cadastrados:
        <strong><?php echo $total; ?></strong>

    </div>


    <div class="botoes">

        <a href="index.php" class="botao voltar">
            ← Voltar para o cadastro
        </a>

    </div>

</div>

</body>

</html>


