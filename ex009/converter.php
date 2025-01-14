<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>

    <p>

        <?php 
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $cotacao = 6;
            $real = $_GET["dinheiro"];
            $dolar = number_format(($real/$cotacao), 2);
            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a US\$ " . $dolar;    
        ?>
       

    </p>
</body>
</html>