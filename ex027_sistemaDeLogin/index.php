<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
</head>

<body>
    <?php 
    
    require_once 'db_connect.php';
    session_start();


    if(isset($_POST['logar'])){
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);
        $senha = md5($senha);
        if(empty($login) || empty($senha)){
            $erros[] = '<li> O campo login/senha deve ser preenchido </li>';
        }else{
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);
            if(mysqli_num_rows($resultado)==1){
                $dados = mysqli_fetch_array($resultado);//converte o resultado da pesquisa em um array
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                echo "<br><hr>";
                echo var_dump($dados);
                echo "<hr>";
                header('Location: home.php');
            }else{
                $erros[] = "<li> Conbinação não encontrada </li>";
            }
        }
    }

    ?>
    <h1>Login</h1>
    <?php 
    
    if(!empty($erros)){
        foreach($erros as $key => $erro){
            echo "$erro";
        }
    }

    ?>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        Login:<input type="text" name="login"><br>
        Senha:<input type="password" name="senha">
        <button type="submit" name="logar">Logar</button>
    </form>

</body>

</html>