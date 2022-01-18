<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Snack_2</title>
</head>
<body>
<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
    
<?php

// let's create a variable 

$name = $_GET['name'];

$GrantedName = false;
if (strlen($name) > 3) {
    $GrantedName = true;
}

if ($GrantedName == true){
    echo '<h1> Access Granted</h1>';
}else {
    echo '<h1> Access Denied</h1>';
}

?>
</body>
</html>