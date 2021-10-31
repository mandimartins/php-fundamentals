<?php

if (isset($_POST["submit"])) {
    session_start();
    $_SESSION["name"] = htmlentities($_POST["name"]);
    $_SESSION["email"] = htmlentities($_POST["email"]);

    header("Location: page2.php");
}
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

<form method="POST" action="<?php $_SERVER["PHP_SELF"] ?>">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="email" name="email">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
