<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
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
        main form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column  ;
        }
        main div{
            display: flex;
            flex-direction: column;
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

    <?php 
    
        $numero1 = $_GET["numero1"]??0;
        $numero2 = $_GET["numero2"]??0;
    
    ?>

    <header>
        <h1>Soma de valores</h1>
    </header>

    <main>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">

            <div>
                <label for="numero1">Primeiro:</label>
                <input type="number" name="numero1" value="<?= $numero1 ?>">
            </div>

            <div>
                <label for="numero2">Segundo:</label>
                <input type="number" name="numero2" value="<?= $numero2 ?>">
            </div>
            <button type="submit">Somar</button>
            <p>

                <?php 
                
                echo "Resultado: " . $numero1 + $numero2;

                ?>

            </p>
        </form>
    </main>

    <footer>

    </footer>
</body>
</html>