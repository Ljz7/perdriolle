<?php

class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Business
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }
    
    public function hire(Person $person)
    {
		$this->staff->add($person);
    }
    
    public function show(){
        foreach ($this->staff->getMembres() as $value) {
            var_dump($value);
        }
    }
    

}

class Staff
{
    protected $members = [];

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function getMembres(){
        return $this->members;
    }
}

$staff = new Staff();
$staff->add(new Person('toto'));
$busi = new Business($staff);
$busi->hire(new Person('bob'));

$busi->show();

