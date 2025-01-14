<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado Final:</h1>
    </header>

    <p>O número esolhido foi: <?php echo $_GET["numero"] ?> </p>
    <p>Seu antecessor é: <?php echo $_GET["numero"]-1 ?> </p>
    <p>Seu sucessor é: <?php echo $_GET["numero"]+1 ?></p>
</body>
</html>