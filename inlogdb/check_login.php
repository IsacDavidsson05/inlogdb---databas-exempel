<?php
//starta sessionen
session_start();

//Om session-variabeln username inte finns
if(!isset($_SESSION['username'])){
    //skicka till index.php med meddelande
    header('location: index.php?mess=Du är inte inloggad.');
}
?>