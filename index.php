
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Cadastro de Produtos</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<a class="btn-translate" href="translate.php">Traduzir</a>
    
    <div class="container">
        <h1>Cadastro de Produto</h1>

        <form action="confirmacao.php" method="POST">

            <label for="codigo">
                Código:
            </label>

            <input
                type="text"
                id="codigo"
                name="codigo"
                placeholder="Digite o código"
                required
            >


            <label for="nome">
                Nome do Produto:
            </label>

            <input
                type="text"
                id="nome"
                name="nome"
                placeholder="Digite o nome do produto"
                required
            >


            <label for="categoria">
                Categoria:
            </label>

            <input
                type="text"
                id="categoria"
                name="categoria"
                placeholder="Digite a categoria"
                required
            >


            <label for="preco">
                Preço:
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
                Quantidade:
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
                    Cadastrar Produto
                </button>

            </div>

        </form>


        <!-- Botão para abrir o arquivo CSV -->

        <form action="abrir_csv.php" method="GET">

            <button
                type="submit"
                class="btn-abrir">
                Abrir arquivo CSV
            </button>

        </form>


        <div class="observacao">

            Sistema simples de cadastro de produtos

        </div>

    </div>

</body>

</html>

