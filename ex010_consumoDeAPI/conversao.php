<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        }
        input{
            height: 32px;
            padding: 0 4px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>

    <main>
        <div>
            <p>
            
                <?php 
                    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'01-07-2025\'&@dataFinalCotacao=\'01-14-2025\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                    $dados = json_decode(file_get_contents($url), true); // true exibe no formato de array, false exibe no formato de objeto
                    $real = $_GET["real"];
                    $cotacao = $dados["value"][0]["cotacaoCompra"];
                    $dolar = number_format(($real/$cotacao), 2);
                    echo "<p> Seus " . numfmt_format_currency($padrao, $real, "BRL") .  " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
                ?>
            </p>
        </div>
    </main>

    <footer>

    </footer>
</body>
    
