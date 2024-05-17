<?php

//öppnar sessionen
session_start();

require_once("database_connection.php");
// Skapa variabler för korrekt username och password
$username = trim($_POST['username']);
$password = trim($_POST['password']);

//gör anrop till databasen
$sql = "SELECT * FROM user WHERE username = :Username AND password = :Password AND isActive = 1";
$stm = $pdo->prepare($sql);
$stm->execute(array('Username' => $username, 'Password' => $password));
$res = $stm->fetch(PDO::FETCH_ASSOC);

if(isset($res['userid'])){
    $_SESSION['Username'] = $username;
    $_SESSION['Password'] = $password;
    $isAdmin = $res['isAdmin'];
    $_SESSION['isLoggedIn'] = True;
    header('location: admin.php?');
}   else{
    header('location: login.php?mess=Du har angivit felaktig inloggningsuppgifter.');
}

?>