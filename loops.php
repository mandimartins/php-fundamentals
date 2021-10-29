<?php

    /**
     * For
     * While
     * Do...While
     * Foreach
     */

     #For Loop

     #@params - init, condition, increment

// for ($i = 0; $i <= 10; $i++) {
//     echo $i;
// }


//While
$a = 0;

//this check first and run later

while ($a <= 10) {
    # code...
}


//Do while

$c = 0;

//this runs first and check later

do {
    # code...
} while ($a <= 10);

//Foreach is different because is meant to work with arrays


$fruits = ["Banana","Apple","Tomato"];

foreach ($fruits as $fruit) {
    echo $fruit;
};
