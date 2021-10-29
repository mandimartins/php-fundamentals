<?php

    /*
        -Indexed
        -Associative
        -Multi-dimensional
    */

    //Indexed (the most common and easy to use)

    $people = array("Kevin", "Jeremy", "Sarah");
    $ids = array(22,54,67,93);

    $cars = ["Honda","Toyota","Ford"];

    //If I wanna know how many cars I have...
    echo count($cars);

    // echo $ids[1];


    //Associative arrays

    //They allow me put define the key names

    $people2 = array("Amanda" => 24, "Alexa" => 25);

    //adding stuffs to the variable on the fly (mutating it)
    $people2["Richard"] = 55;

    var_dump($people2);

    //Multidimensional-Arrays

    $cars2 = array(
        array("Honda", 20, 10),
        array("Toyota", 30,20),
        array("Ford",23, 12),
    );

    echo ($cars2[1][0]);
