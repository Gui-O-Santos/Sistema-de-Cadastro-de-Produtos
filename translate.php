
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Products Inputs</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

<a class="btn-translate" href="index.php">Translate</a>
    
    <div class="container">
        <h1>Product sign up</h1>

        <form action="cadastro.php" method="POST">

            <label for="codigo">
                Product Code:
            </label>

            <input
                type="text"
                id="codigo"
                name="codigo"
                placeholder="Digite o código"
                required
            >


            <label for="nome">
                Product Name:
            </label>

            <input
                type="text"
                id="nome"
                name="nome"
                placeholder="Digite o nome do produto"
                required
            >


            <label for="categoria">
                Category:
            </label>

            <input
                type="text"
                id="categoria"
                name="categoria"
                placeholder="Digite a categoria"
                required
            >


            <label for="preco">
                Value:
            </label>

            <input
                type="number"
                id="preco"
                name="preco"
                step="0.01"
                placeholder="0.00"
                required
            >


            <label for="quantidade">
                Quantity:
            </label>

            <input
                type="number"
                id="quantidade"
                name="quantidade"
                placeholder="Digite a quantidade"
                required
            >


            <div class="botoes">

                <button
                    type="submit"
                    class="btn-cadastrar">
                    Sign up Product
                </button>

            </div>

        </form>


        <!-- Botão para abrir o arquivo CSV -->

        <form action="abrir_csv.php" method="GET">

            <button
                type="submit"
                class="btn-abrir">
                Open CSV File
            </button>

        </form>


        <div class="observacao">

            Simple Product Registration System

        </div>

    </div>

</body>

</html>

