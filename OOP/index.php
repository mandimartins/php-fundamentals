<?php

class Person
{
    //Access modifiers
        #public => acess from anywhere outside the class
        #private => acess only within this class
        #protected => access from this class and any other that extends it
    public $name;
    public $email;
}

//Instantiate a class / Create an object
$person1 = new Person();

//This it not a good practice
$person1->name = "Agnes Obel";

echo $person1->name;
