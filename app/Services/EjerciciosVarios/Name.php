<?php

class Person
{

    protected $name;
    
    public function __construct($name)
    {
        $this->name = $name;

    }

    public function name() 
    {
        return $this->name;
    }
}


$octavio = new Person('Octavio');

$jose = new Person('Ramon');

echo "<p>{$octavio->name()}</p>";
echo "<p>{$jose->name()}</p>";