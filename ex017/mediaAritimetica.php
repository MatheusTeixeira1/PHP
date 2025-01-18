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
    
        $numero1 = $_GET["numero1"]??0;
        $numero2 = $_GET["numero2"]??0;
        $peso1 = $_GET["peso1"]??1;
        $peso2 = $_GET["peso2"]??1;

        $mediaSimples = ($numero1+$numero2)/2;
        $mediaPonderada = (($numero1*$peso1)+($numero2*$peso2))/($peso1+$peso2);

    ?>
    <main>
        <div class="divConteudo1 divConteudo">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET" class="divConteudo">
                <h2 style="padding-bottom: 16px;">Média Aritimética</h2>
                
                <label for="numero1">1° Valor:</label>
                <input type="number" name="numero1" value="<?= $numero1 ?>" step="0.01">
                
                <label for="peso1">1° Peso</label>
                <input type="number" name="peso1" value="<?= $peso1 ?>">

                <label for="numero2">2° Valor</label>
                <input type="number" name="numero2" value="<?= $numero2 ?>">

                <label for="peso2">2° Peso</label>
                <input type="number" name="peso2" value="<?= $peso2 ?>">

                <button type="submit">Fazer Média</button>
            </form>
        </div>

        <div class="divConteudo2 divConteudo">
            <div>
                <h2 style="margin-bottom: 16px;">Resultado Final</h2>
                    
                <p style="margin-bottom: 8px;">
                    Analisando as notas, temos:
                </p>
                <u>
                    <li>
                        A média simples é: <strong><?= $mediaSimples ?></strong>
                    </li>
                    <li>
                        Porém considerando os pesos: <strong><?= number_format($mediaPonderada, 2, ",", ".")  ?></strong>
                    </li>
                </u>
            </div>
        </div>
    </main>
</body>
</html>