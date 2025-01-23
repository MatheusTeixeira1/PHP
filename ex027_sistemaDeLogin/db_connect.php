<html>
<body>
    
<?php 
$servername = "localhost";
$username = "root";
$password = "1234";
$db_name = "crud_login";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()){
    echo "falha na conexão".mysqli_connect_error();
}

?>

</body>
</html>