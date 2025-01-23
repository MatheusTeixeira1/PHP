<?php 

if (isset($_POST['enviar'])){
    $erros = array();
    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
        $erros[] = "Idade precisa ser um inteiro";
    }
    if(!$peso = filter_input(INPUT_POST, "peso", FILTER_VALIDATE_FLOAT)){
        $erros[] = "Peso precisa ser um numero";
    }
    if(!empty($erros)){
        foreach($erros as $erro){
            echo $erro."<br>";
        }
    }

    //limpando inputs
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    Idade: <input type="number" name="idade">
    Nome: <input type="text" name="nome">
    Peso: <input type="number" name="peso">
    <button type="submit" name="enviar">Enviar</button>
    
</form>