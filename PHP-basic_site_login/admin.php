<?php
session_start();
$user_loged = $_SESSION['user'];

//Caso tentem acessar a pagina sem uma conexão valida sera redirecionado para index.php
if(!$_SESSION["user"]){
    header("Location: index.php");
    exit;
}

echo "<h2> Logado como: $user_loged";
echo '<h2><a href="logout.php">Sair</a></h2>'

?>
