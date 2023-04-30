<?php
session_start();
include("db_connect.php");



//Caso o usuário tente acessar o login.php de forma ilicita será redirecionado para index.php
if(empty($_POST["user"]) || empty($_POST["pass"])){
    header("Location: index.php");
    exit();
}

//contem um filtro contra SQLI
$user_filter = mysqli_real_escape_string($connect,$_POST["user"]);
$pass_filter = mysqli_real_escape_string($connect, $_POST["pass"]);

$query = "select user, password from users where user = '$user_filter' and password = '$pass_filter' ";

$result = mysqli_query($connect, $query);
$status_code = mysqli_num_rows($result);


//Verificando se o usuário pode logar ou não
if($status_code == 1){
    $_SESSION["user"] = $user_filter;
    header("Location: admin.php");
    exit;
} else {
    //caso a senha ou o usuário estejam errados recebera esta seção para auxiliar a box de alerta
    $_SESSION["not_loged"] = true; 
    header("Location: index.php");
    exit;
}

?>