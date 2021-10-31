<?php

    //Message vars
    $msg = "";
    $msgClass = "";

    //Check for submit
if (filter_has_var(INPUT_POST, "submit")) {
      //Get the form data
      $name = htmlspecialchars($_POST["name"]) ;
      $email = htmlspecialchars($_POST["email"]);
      $message = htmlspecialchars($_POST["message"]);

         //Check required fields
    if (!empty($email) && !empty($name) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $msg = "Please use a valid email";
            $msgClass = "alert-danger";
        } else {
            echo "Passed!";
        }
    } else {
        $msg = "Please fill in all fields";
        $msgClass = "alert-danger";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css"
    integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d"
    crossorigin="anonymous">
</head>
<body>

<div class="container">

    <?php if ($msg !== "") : ?>
        <div class="alert <?php echo $msgClass ?>">
        <?php echo $msg ?></div>
    <?php endif; ?>
    <div class="card mt-5">
        <div class="card-header">
        Check field validation
        </div>
        <div class="card-body">
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <div class="form-group">
            <label for="">
                Name
            </label>
            <input type="text" class="form-control" name="name"
            value="<?php echo isset($_POST["name"]) ? $name : "" ?>">
        </div>
        <div class="form-group">
            <label for="">
                Email
            </label>
            <input type="text" class="form-control" name="email"
            value="<?php echo isset($_POST["email"]) ? $email : "" ?>">
        </div>
        <div class="form-group">
            <label for="">
                Message
            </label>
            <textarea  type="text" class="form-control" name="message">
            <?php echo isset($_POST["message"]) ? $message : "" ?>
            </textarea>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
        </div>
    </div>
</div>
</body>
</html>
