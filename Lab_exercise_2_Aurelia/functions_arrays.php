<?php
class hello {
    public function greet($name): string {
        return "Hello, " . $name . "!";
    }

    public function greetStudent(array $students): void {
        foreach ($students as $student) {
            echo $this->greet($student) . "<br>";
        }
    }
}
$greeting = new hello();
$students = array("Lulu", "Lili", "Lala", "Lele", "Lolo");
$greeting->greetStudent($students);
?>
