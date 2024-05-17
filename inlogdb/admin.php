<?php
// Kollar om vi är inloggade
require_once('check_login.php');

// Sparar till senare
//session_start();
// echo "<pre>";
// print_r(get_defined_vars());
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggningsapplikation</title>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
</head>
<body>
    <div class="container">
        <div class="columns">
            <div class="column col-3">
                <h1>Admin</h1>
                <p>Du är inloggad som admin</p>
                <p><a href="logout.php">Logga ut</a></p>
            </div>
        </div>
    </div>
</body>
</html>