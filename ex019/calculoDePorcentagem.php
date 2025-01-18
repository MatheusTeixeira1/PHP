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
        $padraoMonetario = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $preco = $_GET["preco"]??0;
        $porcentagem = $_GET["porcentagem"]??0;
        $reajuste = numfmt_format_currency($padraoMonetario,($preco+($preco * ($porcentagem /100))), "BRL");
    ?>
    <main>
        <div class="divConteudo1 divConteudo">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET" class="divConteudo">
                <h2 style="padding-bottom: 16px;">Reajuste</h2>
                
                <label for="preco">Preço:</label>
                <input type="number" name="preco" value="<?= $preco ?>" step="0.01">
                
                <label for="porcentagem" >
                    Qual será o percentual de reajuste?(
                    <strong>
                        <span id="p">
                            0
                        </span>
                        %
                    </strong>)

                </label>
                <input type="range" name="porcentagem" id="porcentagem" max="100" step="1" oninput="updateValue()">
                

                <button type="submit">Conferir novo preço:</button>
            </form>
        </div>

        <div class="divConteudo2 divConteudo">
            <div>
                <h2 style="margin-bottom: 16px;">Resultado Final</h2>
                    
                <p style="margin-bottom: 8px;">
                
                    <?= "Com o reajuste de <strong>$porcentagem%</strong>, o novo preço é: <strong>$reajuste</strong>"?>
                </p>

            </div>
        </div>
    </main>
    <script>
        updateValue();
        function updateValue() {
            //document.getElementById("p").innerText =document.getElementById("porcentagem").value;
            p.innerText = porcentagem.value;
        }

    </script>
</body>
</html>