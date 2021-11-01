<?php

    //============================= |WORK WITH FILEPATH| ==============================
    $path = "/dir0/dir1/myfile.php";

    $file = "file.txt";

    //Return filename
    echo basename($path)  . "<br>";

    //Return filename without extension
    echo basename($path, ".php") . "<br>" ;

    //Return the directory name from path
    echo dirname($path) . "<br>";

    //Check if file exists
    echo file_exists('file.txt') . "<br>"; // true or false => 1 || 0

    //Get absolute path from file
    echo realpath($file) . "<br>";

    //Check to see if file
    echo is_file($file) . "<br>"; // true or false => 1 || 0

    //Check if writable
    echo is_writable($file)  . "<br>"; //  true or false => 1 || 0

    //Check if readable
    echo is_readable($file) . "<br>"; //  true or false => 1 || 0


    //============================= |MANIPULATE FILE SYSTEM| ==============================


    //Create a directory
    // mkdir("testdir");

    //Remove directory if empty
    // rmdir("testdir");

    //Copy
    // echo copy("file.txt", "file0.txt");

    //Rename a file
    // rename("file0.txt", "myfile0.txt");

    //Delete a file
    // unlink("myfile0.txt");

    //Write from file to string
    echo file_get_contents($file) . "<br>";

    //Write string to file / Overwrite content
    // echo file_put_contents($file, "Just adding some text content");

    $currentText = file_get_contents($file);
    $appendText = "Winter came and made it so all look alike, look alike
    Underneath the grass would grow, aiming at the sky";

    // echo file_put_contents($file, "{$currentText} {$appendText}") . "<br>";

    echo file_get_contents($file);
