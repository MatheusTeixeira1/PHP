<?php 

$servername = "localhost";
$username = "root";
$password = "1234";
$db_name = "crud_login";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect,"utf8");

if(mysqli_connect_error()){
    echo "Erro na conexão " . mysqli_connect_error();
}

?>