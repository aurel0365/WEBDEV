<?php

class Student {
    private string $name;
    private DateTime $birthdate;
    private string $sex;
    private float $gpa;
    private bool $isStudent;

    public function __construct(string $name, string $birthdate, string $sex, float $gpa, bool $isStudent) {
        $this->name = $name;
        $this->birthdate = new DateTime($birthdate);
        $this->sex = $sex;
        $this->gpa = $gpa;
        $this->isStudent = $isStudent;
    }

    public function getAge(): string {
        $currentDate = new DateTime();
        $ageCalcu = $currentDate->diff($this->birthdate);

        $years = $ageCalcu->y;
        $months = $ageCalcu->m;
        $days = $ageCalcu->d;
        
        return "$years years, $months months, and $days days";
    }

    public function displayInfo(): void {
        $age = $this->getAge();
        echo "My name is " . $this->name . "<br>";
        echo "My age is " . $age . "<br>";
        echo "My gender is " . $this->sex . "<br>";
        echo "My GPA is " . $this->gpa . "<br>";
        echo "Am I a student? " . ($this->isStudent ? "Yes" : "No") . "<br>";
    }
}

$student = new Student("Aurelia", "2005-06-03", "Female", 3.8, true);
$student->displayInfo();
?>
