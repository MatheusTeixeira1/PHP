<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de numeros aleatórios</title>
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>

    <p>
        Gerando um número aleatório entre 0 e 100... </br>
        O valor gerado foi 
        <?php echo rand(0,100);?>
    </p>

    <button onclick="location.reload();">Atualizar Página</button>
</body>
</html>