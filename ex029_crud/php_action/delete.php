<?php 

session_start();

require_once 'db_connection.php';

if(isset($_POST['btn-deletar'])){

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = 'Deletado com sucesso!';
    }else{    
        $_SESSION['mensagem'] = 'Erro ao deletar!';
    }
    header('Location: ../index.php');
}

?>