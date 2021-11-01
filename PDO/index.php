<?php

    $host = "localhost";
    $user = "root";
    $password = "toor";
    $dbname = "pdoposts";

    // Set DSN (data source name)
    $dsn = "mysql:host=" . $host . ";" . "dbname=" . $dbname;

    //Create a PDO instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // limit will not work if enabled

// $stmt = $pdo->query("SELECT * FROM posts");

// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { // I overwrite the FETCH_OBJ
//     echo $row["title"] . "<br>";
// }

// while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
//     echo $row->title . "<br>";
// }

#PREPARED STATEMENT (prepate & execute)

## ======================= FETCH DATA =============================

//User input

$author = "Gigi Ghorbani";
$is_published = true;
$limit = 1;

//Positional params
// $sql = " SELECT * FROM posts WHERE author = ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$author]);
// $posts = $stmt->fetchAll();

#Named params/associative array
// $sql = " SELECT * FROM posts WHERE author = :author && is_published = :is_published";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["author" => $author, "is_published" => $is_published]);
// $posts = $stmt->fetchAll();

$sql = " SELECT * FROM posts WHERE author = ? && is_published = ? LIMIT ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$author, $is_published, $limit]);
$posts = $stmt->fetchAll();

foreach ($posts as $post) {
    echo $post->author . "<br>";
    echo $post->title . "<br> <br>";
}

// $id = 1;

// $sql = " SELECT * FROM posts WHERE id = :id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["id" => $id]);
// $post = $stmt->fetch();

// $sql = " SELECT * FROM posts WHERE author = ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$author]);
// $count = $stmt->rowCount();


## ======================= INSERT DATA =============================


// $title = "Do it yourself!";
// $author = "John Doe";
// $body = "Lorem ipsum dolor sit amet,
//  consectetur adipiscing elit,
//  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

// $sql = "INSERT INTO posts(title, author, body) VALUES (:title, :author, :body)";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["title" => $title, "author" => $author, "body" => $body]);
// echo "POST ADDED!";

## ======================= UPDATE DATA =============================

// $id = 8;
// $author = "John Doe";
// $body = "This is the updated post!";

// $sql = "UPDATE posts SET body= :body WHERE id = :id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["body" => $body, "id" => $id]);
// echo "POST UPDATED!";


## ======================= DELETE DATA =============================

// $id = 8;

// $sql = "DELETE FROM posts WHERE id = :id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["id" => $id]);
// echo "POST DELETED!";


## ======================= SEARCH DATA =============================

// $search = "%f%";
// $sql = "SELECT * FROM posts WHERE title LIKE ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$search]);
// $posts = $stmt->fetchAll();

// foreach ($posts as $post) {
//     echo $post->title . "<br>";
// }

?>
<!--
<h1><?php echo $post->title  ?></h1>
<span style="font-weight: bold; color:brown;"><?php echo $post->author  ?></span>
<p><?php echo $post->body  ?></p> -->

<!-- <h1> Row count: <?php echo $count; ?></h1> -->
