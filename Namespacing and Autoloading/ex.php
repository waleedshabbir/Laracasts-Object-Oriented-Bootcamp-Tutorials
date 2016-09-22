<?php

use Acme\Person;
use Acme\Business;
use Acme\Staff;


$waleed = new Person('Waleed Shabbir');

$staff = new Staff([$waleed]);


$laracasts = new Business($staff);

//$laracasts->hire($waleed);
$laracasts->hire(new Person('ABC '));


var_dump($laracasts->getStaffMembers());