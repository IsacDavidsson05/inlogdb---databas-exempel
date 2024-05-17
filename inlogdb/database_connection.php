<?php
# Variablerna för databasen
$host = "";                             // For SQLite, the host is not used
$user = "";                             // For SQLite, the user is not used
$pwd = "";                              // For SQLite, the password is not used
$db = __DIR__ . "/DATABASE/Mydb.db"; // Vägen till SQLite databasens fil

# ds  . data source name
$dsn = "sqlite:".$db;

# Inställningar som körs när konto skapas
$options = array(
    PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION, //Sett error mode to exceptions
    PDO::ATTR_EMULATE_PREPARES => false // disable emulation of prepared statements
);

//Skapa konto eller kasta
try {
    $pdo = new PDO($dsn, $user, $pwd, $options);
}
catch(Exception $e) {
    die('Could not create a new account:<br/>'.$e);
}
?>