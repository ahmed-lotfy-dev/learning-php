<?php
require "Students.php";

// Class Manage Students
class StudentManager
{
    private $students = [];
    public function add_student(string $name, int $grade)
    {
        // Indexed Array
        // array_push($this->students,new Student($name,$grade));
        // Associative Array
        if ($grade > 100 || $grade < 0) {
            $grade = -1;
        }
        $this->students[$name] = new Student($name, $grade);
    }

    public function update_grade(string $name, int $grade)
    {
        if (isset($this->students[$name])) {
            $this->students[$name]->setGrade($grade);
        } else {
            echo "*** Student not found! ***" . "\n";
        }
    }

    public function remove_student(string $name)
    {
        if (isset($this->students[$name])) {
            unset($this->students[$name]);
        } else {
            echo "*** Student not found! ***" . "\n";
        }
    }
    public function display_students()
    {
        if (empty($this->students)) {
            echo "No Students..." . "\n";
        } else {
            echo "========================= \n";
            foreach ($this->students as $student) {
                echo "Student: " . $student->getName() . ", Grade: " . $student->getGrade() . "\n";
            }
            echo "========================= \n";
        }
    }


}