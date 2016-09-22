<?php


class Person{

    protected $name;

    public function __construct($name)
    {
        $this->name=$name;
    }
}

class Business{

    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff=$staff;
    }

    public function hire(Person $person)
    {
        // add $person to the staff collection
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }

}

class Staff{

    protected $members=[];

    public function __construct($members = [])
    {
        $this->members=$members;
    }

    public function add(Person $person)
    {
        $this->members[]=$person;
    }

    public function members()
    {
        return $this->members;
    }

}


$waleed = new Person('Waleed Shabbir');

$staff = new Staff([$waleed]);


$laracasts = new Business($staff);

//$laracasts->hire($waleed);
$laracasts->hire(new Person('ABC '));


var_dump($laracasts->getStaffMembers());