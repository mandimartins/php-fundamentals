<?php

// if (isset($_GET["name"])) {
//     print_r($_GET);
//     echo htmlentities($_GET["name"]); //import function when it comes to security in php
// }

// if (isset($_POST["name"])) {
//     print_r($_POST);
// }

// if (isset($_REQUEST["name"])) {
//     print_r($_REQUEST);
// }

// echo $_SERVER["QUERY_STRING"];

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
    <form method="POST" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
