<?php
/* 
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

if(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["age"])){
    // set var
    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];

    // position of @
    $position_at = strpos($email, '@');

    // set . position after @
    $position_dot = strpos($email, '.', $position_at);

    if (strlen($name)>3 && is_numeric($age) == true && $position_at !== false &&   $position_dot !== false) {
        $message = 'Accesso Granted';
        } else {
        $message = 'Accesso NOT Granted';
    }
    
} else {
    $message = 'Insert data';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack02 - Email</title>
</head>
<body>
    <!-- form  -->
    <form action="" method="get">
        <div>
            <label for="name">Insert Name</label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="mail">Insert Email</label>
            <input type="text" name="email">
        </div>
        
        <div>
            <label for="age">Insert age</label>
            <input type="text" name="age">
        </div>

        <button>Invia</button>
    </form>

    <!-- message to user -->
    <p> <?= $message ?> </p>
    
</body>
</html>