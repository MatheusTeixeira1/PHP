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
            gap: 32px;
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
        }
    </style>
</head>
<body>
    <?php 
    
        $numero = $_GET["numero"]??1;
        $quadrada = sqrt($numero);
        $cubica = pow($numero, 1/3)

    ?>
    <main>
        <div class="divConteudo1 divConteudo">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET" class="divConteudo">
                <h2 style="padding-bottom: 16px;">Informe um número</h2>
                <label for="numero">Número:</label>
                <input type="number" name="numero" value="<?= $salarioMinimo ?>" step="0.01">
                <button type="submit">Calcular Raízes</button>
            </form>
        </div>

        <div class="divConteudo2 divConteudo">
            <div>
                <h2 style="margin-bottom: 16px;">Resultado Final</h2>
                    
                <p style="margin-bottom: 8px;">
                    Analisando o <strong>número <?= $numero ?> </strong>, temos:
                </p>
                <u>
                    <li>
                        A sua raiz quadrada é <strong><?= $quadrada ?></strong>
                    </li>
                    <li>
                        A sua raiz cubica é <strong><?= $cubica ?></strong>
                    </li>
                </u>
            </div>
        </div>
    </main>
</body>
</html>