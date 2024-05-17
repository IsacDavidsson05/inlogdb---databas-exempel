<?php
session_start();   //Öppna sessionen
session_unset();   //Ta bort sessionens innehåll
session_destroy(); //Förstör sessionen

//Skicka vidare till index.php med meddelande
header('location: index.php?mess=Du har blivit utloggad');
?>