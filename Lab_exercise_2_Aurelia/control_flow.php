<?php
require 'variables.php';

class agecheck {
    private int $age;

    public function __construct(int $age) {
        $this->age = $age;
    }

public function checkage() : void {
    if ($this-> age >= 18 ){
        echo "You are an adult.";
    }else {
        echo "You are a minor.";
    }
    }
}

$age = $student->getAge();
$agecheck = new agecheck($age);
$agecheck-> checkage();
?>