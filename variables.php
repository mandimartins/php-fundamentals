<?php

//single line comment
# single line comment


/**
 * multiline comment
 */

 //Variables

 /**
  * Case sensitive
  * Prefix with Dollar sign $
  * Start with a letter or an underscore only
  */

  /**
   * Data types
   *
   * String
   * Integers
   * Floats(decimals)
   * Booleans(true or false)
   * Arrays
   * Objects
   * NULL
   * Resource
   */

 $output = "hello world";
 $age = 24;
 $price = 3.5;
 $bool = false;

// Put two strings together

$string1 = "String one here";
$string2 = "string two now";

//simplest way but can get messy with more complex structure
$stringsputtogether = $string1 . $string2;

// echo $stringsputtogether;

//modern way

$moderstringstogether = "{$string1} {$string2}";

// echo $moderstringstogether;

//How to define constatns
define('CONSTANTNAME', "Constant value goes here.");

echo CONSTANTNAME;
