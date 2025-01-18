<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
        }

        main{
            width: 60vw;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        ul{
            list-style: none;
            
        }
        li{
            width: 128px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
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
    
    $dividendo = $_GET["dividendo"]??0;
    $divisor = $_GET["divisor"]??1;
    
    ?>
    <main>
        <div>
            <h1>Anatomia de uma divisão</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
                <div>
                    <label for="dividendo"></label>
                    <input type="number" name="dividendo" id="">
                </div>
    
                <div>
                    <label for="divisor"></label>
                    <input type="number" name="divisor" id="">
                </div>
                <button type="submit">Dividir</button>
            </form>
            
            <div style="display: flex; width: 50%;">
                <ul>
                    <li>
                        <?= $dividendo ?>
                    </li>
                    <li>
                        <?= $dividendo%$divisor ?>
                    </li>
                </ul>
                <ul>
                    <li style="border-left: 2px solid black; border-bottom: 2px solid black;">
                        <?= $divisor ?>
                    </li>
                    <li style="border-left: 2px solid black;">
                        <?= (int)$dividendo/$divisor ?>
                    </li>
                </ul>
            </div>
        </div>

    </main>

    <footer>

    </footer>
</body>
</html>