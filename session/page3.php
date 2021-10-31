<?php

//Without the session_start() at the start of the page the server throws an error

    $name = isset($_SESSION["name"]) ? $_SESSION["name"] : "Guest";
    $email = isset($_SESSION["email"]) ? $_SESSION["email"] : "There is no email for guest!";

    //session_destroy() => end the session

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Your name: <?php echo $name ?></h1>
    <h1>And email: <?php echo $email ?></h1>
</body>
</html>
