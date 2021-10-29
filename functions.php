<?php

    /**
     * Camel Case = myFunction()
     *  Lower Case = my_function()
     * Pascal Case - MyFunction() => usually used in classes
     */

function simpleFunction($name = "default name")
{
    echo $name;
}

// simpleFunction("John doe ");
// simpleFunction("Jane of the woods");
// simpleFunction();

function addNumber($a, $b)
{
    echo $a + $b;
}

// addNumber(33, 74);


$myNum = 10;

function addFive($num)
{
    echo $num += 5;
}

addFive($myNum);

echo $myNum;


//By Reference
function addTen(&$num)
{
    echo $num += 10;
}

addTen($myNum);

echo $myNum;
