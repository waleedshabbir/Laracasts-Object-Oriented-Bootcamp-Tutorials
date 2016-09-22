<?php


/*class Person{
    public static $age=1;

    public function haveBirthday()
    {
        static::$age++;
    }

}

$joe = new Person;
$joe->haveBirthday();
$joe->haveBirthday();

$jane=new Person;
$jane->haveBirthday();

echo Person::$age;

*/

class BankAccount{
    const TAX=0.09;

}

echo BankAccount::TAX;