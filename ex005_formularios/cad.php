<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
    <h1>
        Resultado do processamento
    </h1>    

    </header>

    <main>

        <?php 
        
            $nome = $_GET["nome"];
            $sobreNome = $_GET["sobrenome"];

            echo "<p> É um prazer te conhecer, $nome $sobreNome!</p>";
        ?>

        <p>

            <a href="javascript:history.go(-1)">
                Voltar
            </a>

        </p>
    </main>
</body>
</html>