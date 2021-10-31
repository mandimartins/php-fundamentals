<?php
    session_start();
    $name = $_SESSION["name"];
    $email = $_SESSION["email"];

    print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <h1>
    Hi, <?php echo $name; ?>! we have your email: <?php echo $email; ?>, stored in a session.
    <a href="page3.php">Go to page 3</a>
    </h1>
</body>
</html>
