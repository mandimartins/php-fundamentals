<?php

    // echo date("d"); // Day
    // echo date("m"); // Month
    // echo date("Y"); //Year

    // echo date('l'); // Day of the week

    // echo date("Y/m/d"); //  year month day
    // echo date("m-d-Y"); // month day year

    //I can use hyphens and dashes


    // echo date('h'); // Hour

    // echo date("i"); // Minutes

    // echo date("s"); // Seconds

    // echo date("a"); //AM or PM

    //Combine these together

    //Set timezone

    date_default_timezone_set('America/Sao_Paulo');
    // echo date('h:i:sa');

    $timestamp = mktime(12, 15, 45, 10, 12, 1997);

    // echo $timestamp;

    // echo date("m/d/Y", $timestamp);

    $timestamp2 = strtotime('7:00pm March 22 2022');

    // echo $timestamp2;

    // echo date('m/d/Y h:i:sa', $timestamp2);
