<?php
// tom variabel som lagrar mess (eller är tom)
$mess ="";
//om $_GET['mess finns']
//if(isset($_GET['mess'])){
//    $mess = "<p class='text-error'>{$_GET['mess']}</p>";
//}
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
                <h1>Inloggningsapplikationen</h1>
                <?php echo $mess; ?>
                <form method="POST" action="login.php">
                    <div class="form-group">
                        <label class="form-label" for="username">Användarnamn</label>
                        <input class="form-input" id="username" name="username" type="text" required>
                        <label class="form-label" for="password">Lösenord</label>
                        <input class="form-input" id="password" name="password" type="password" required>

                        <label class="form-checkbox">
                        <input type="form-checkbox">
                        <i class="form-icon"></i> Håll mig inloggad
                        </label>
                        <input type="submit" class="btn btn-primary" value="Logga in">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>