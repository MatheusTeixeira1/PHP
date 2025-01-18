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
        $nascimento = $_GET["nascimento"]??0;
        $ano = $_GET["ano"]??date("Y");
        $idade = ($ano - $nascimento)??0;
        
    ?>
    <main>
        <div class="divConteudo1 divConteudo">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET" class="divConteudo">
                <h2 style="padding-bottom: 16px;">Média Aritimética</h2>
                
                <label for="nascimento">Em que ano você nasceu?</label>
                <input type="number" name="nascimento" value="<?= $nascimento ?>" step="0.01">
                
                <label for="ano">Quer saber sua idade em qual ano? (estamos em <?= date("Y") ?>)</label>
                <input type="number" name="ano" value="<?= $ano ?>">

                

                <button type="submit">Fazer Média</button>
            </form>
        </div>

        <div class="divConteudo2 divConteudo">
            <div>
                <h2 style="margin-bottom: 16px;">Resultado Final</h2>
                    
                <p style="margin-bottom: 8px;">
                    <?php 
                        
                        if ($idade < 0 ){
                            echo "<p> Vocé não nasceu ainda. </p>";
                        }else{
                            echo "<p> No ano de  $ano você terá: <strong> $idade </strong></p>";
                            
                        }
                    
                    ?>
                </p>

            </div>
        </div>
    </main>
</body>
</html>