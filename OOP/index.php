<?php

class Person
{
    //Access modifiers
        #public => acess from anywhere outside the class
        #private => acess only within this class
        #protected => access from this class and any other that extends it
    private $name;
    private $email;

    //It does not need to be instantiated to use.
    private static $ageLimit = 50;

    //Run when instantiate the object
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->$email = $email;
        echo __CLASS__ . " created!" ;
    }

    public function __destruct()
    {
        echo __CLASS__ . " destroyed!";
    }

    // good for validations, is more secure.
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public static function getAgeLimit()
    {
        return  self::$ageLimit;
    }
}

echo Person::getAgeLimit();
#Instantiate a class / Create an object
// $person1 = new Person("John Doe", "john@gmail.com");

// $person1->getName();

#This it not a good practice
// $person1->name = "Agnes Obel";

// echo $person1->name;

class Customer extends Person
{

    private $balance;
    public function __construct($name, $email, $balance)
    {
        parent::__construct($name, $email, $balance);
        $this->balance = $balance;
        echo "A new " . __CLASS__ . " has been created!<br>";
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}

$customer = new Customer("John Doe", "John123@gmail.com", 3000);
echo $customer->getName() . "<br>";
echo $customer->getBalance() . "<br>";
