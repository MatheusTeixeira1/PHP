<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;

        }
        main{
            width: 516px;
            flex-direction: column;
        }
        .divConteudo{
            display: flex;
            flex-direction: column;
            padding: 32px;
        }
        input{
            font-size: 16px;
            height: 32px;
            margin-bottom: 16px;
            border-radius: 4px;
            border: 1px solid gray;
        }
        button{
            border: 1px solid gray;
            padding: 8px;
            border-radius: 4px;
        }
        .divConteudo2{
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 0;
        }
    </style>
</head>
<body>
    <?php 
    
        $segundos = $_GET["segundos"]??0;
        $semanas = (int)($segundos/604800);
        $resto = $segundos%604800;
        $dias = (int)($resto/86400);
        $resto = $resto%86400;
        $horas = (int)($resto/3600);
        $resto = $resto%3600;
        $minutos = (int)($resto/60);
        $resto = $resto%60;
        
        echo $semanas;
        echo "<br>";
        echo $dias;
        echo "<br>";
        echo $horas;
        echo "<br>";
        echo $minutos;
        echo "<br>";
        echo $resto;
    ?>
    <main>
        <div class="divConteudo1 divConteudo">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET" class="divConteudo">
                <h2 style="padding-bottom: 16px;">Convertor de tempo</h2>
                
                <label for="segundos">Segundos:</label>
                <input type="number" name="segundos" value="<?= $segundos ?>">
                
                <button type="submit">Converter</button>
            </form>
        </div>

        <div class="divConteudo2 divConteudo">
            <div>
                <h2 style="margin-bottom: 16px;">Resultado Final</h2>
                    
                <p style="margin-bottom: 8px;">
                
                    <?= "Com o reajuste de <strong>%</strong>, o novo preço é: <strong></strong>"?>
                </p>

            </div>
        </div>
    </main>
</body>
</html>