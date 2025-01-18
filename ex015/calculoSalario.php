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
    </style>
</head>
<body>
    <?php 
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        
        $salario = $_GET["salario"]??0.0;
        $salarioFormatado = numfmt_format_currency($padrao, $salario, "BRL");
        $salarioMinimo = $_GET["salarioMinimo"]??1400.0;

        $resto = numfmt_format_currency($padrao, (fmod($salario, $salarioMinimo)), "BRL");
    ?>
    <main>
        <div class="divConteudo1 divConteudo">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET" class="divConteudo">
                <h2 style="padding-bottom: 16px;">Informe seu salario</h2>
                <label for="salario">Salario Atual:</label>
                <input type="number" name="salario" value="<?= $salario ?>" step="0.01" style="">
                <label for="salarioMinimo">Salario Mínimo:</label>
                <input type="number" name="salarioMinimo" value="<?= $salarioMinimo ?>" step="0.01">
                <button type="submit">Enviar</button>
            </form>
        </div>

        <div class="divConteudo2 divConteudo">
            <h2>Resultado Final</h2>
            <p>
                <?= "Quem recebe um salário de: <strong> $salarioFormatado </strong>Ganha " . (int)($salario/$salarioMinimo) . " salários minimos + <strong>" . $resto . "</strong>"?>
            </p>
        </div>
    </main>
</body>
</html>