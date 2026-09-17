
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Products Inputs</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 450px;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
            color: #444;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        input:focus {
            border-color: #007bff;
            outline: none;
        }

        .botoes {
            margin-top: 25px;
        }


        .btn-cadastrar {
            background-color: #007bff;
            color: white;
             width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-cadastrar:hover {
            background-color: #0273ec;
             width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-abrir {
            background-color: #28a745;
            color: white;
             width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-abrir:hover {
            background-color: #1e7e34;
        }

        .btn-translate {
            background-color: #007bff;
            color: white;
            width: 10%;
            padding: 12px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-left: 45%;
    }

         .btn-translate:hover {
            
            background-color: #0273ec;
        }

        .observacao {
            margin-top: 20px;
            text-align: center;
            font-size: 13px;
            color: #777;
        }

    </style>

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

