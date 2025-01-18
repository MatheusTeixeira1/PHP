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
    
        $total = $_GET["total"]??0;
        $total100 = (int)($total/100);
        $resto = $total%100;
        $total50 = (int)($resto/50);
        $resto = $resto%50;
        $total10 = (int)($resto/10);
        $resto = $resto%10;
        $total5 = (int)($resto/5);
        $resto = $resto%5;
        
        echo $total100;
        echo "<br>";
        echo $total50;
        echo "<br>";
        echo $total10;
        echo "<br>";
        echo $total5;
        echo "<br>";
        echo $resto;
    ?>
    <main>
        <div class="divConteudo1 divConteudo">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET" class="divConteudo">
                <h2 style="padding-bottom: 16px;">Sacar dinheiro</h2>
                
                <label for="segundos">Quantidade:</label>
                <input type="number" name="total" value="<?= $total ?>">
                
                <button type="submit">Sacar</button>
            </form>
        </div>

        <div class="divConteudo2 divConteudo">
            <div>
                <h2 style="margin-bottom: 16px;">Você vai receber</h2>
                    
                <ul>
                    <?php 
                    
                        if($total100 != 0){
                            echo 
                            "
                            <li>
                            $total100 notas de 100.
                            </li>
                            ";
                        }
                        if($total50 != 0){
                            echo 
                            "
                            <li>
                            $total100 notas de 50.
                            </li>
                            ";
                        }
                        if($total10 != 0){
                            echo 
                            "
                            <li>
                            $total10 notas de 10.
                            </li>
                            ";
                        }
                        if($total5 != 0){
                            echo 
                            "
                            <li>
                            $total5 notas de 5.
                            </li>
                            ";
                        }
                        if($resto != 0){
                            "
                            <li>
                            $resto reais não disponiveis para saque.
                            </li>
                            ";
                        }
                    ?>

                </ul>

            </div>
        </div>
    </main>
</body>
</html>