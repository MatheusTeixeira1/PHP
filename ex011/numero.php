<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>

        *{
            font-family: sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
            width: 100vw;
            height: 100%;
        }

        header{
            width: 100vw;
            height: 10vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        main{
            width: 100vw;
            display: flex;
            justify-content: center;
            gap: 8px;
        }
        main div{
            display: flex;
            align-items: baseline;
            justify-content: center;
            flex-direction: column  ;
        }
        input{
            height: 32px;
            padding: 0 4px;
        }
        button{
            height: 32px;
            padding: 0 4px;
            background-color: white;
            outline: none;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <header>
        <h1>Analisando um número Real</h1>
    </header>

    <main>
        <?php 

            $numero = $_GET["numero"];
            $parteInteira = (int) $numero;
            $parteFracionaria = number_format(($numero - $parteInteira), 2, ",", ".");
            echo "<div><p>parte inteira:" . $parteInteira . "</p> <p>parte fracionaria:" . $parteFracionaria . "</p></div>"; 

        ?>
        <button onclick="javascrip:history.go(-1)">Volatar</button>
    </main>

    <footer>

    </footer>
</body>
</html>