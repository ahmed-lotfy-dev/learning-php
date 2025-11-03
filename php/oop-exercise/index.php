<?php
require_once "./classes/StudentsManager.php";

####### OOP PHP Exercise

// student manager in the terminal saves in the database
// menu in the terminal 
// add student
// remove student
// update student data

// code to execute main functions (entry point)

// TESTING PROOF OF CONCEPT IT'S WORKING
// $student_manager = new StudentManager();

// $student_manager->add_student("Yahia", 120);
// $student_manager->add_student("Ahmed", grade: 100);
// $student_manager->add_student("Donia", 109);

// $student_manager->display_students();

// $student_manager->remove_student("Donia");
// $student_manager->remove_student("Mohamed");

// $student_manager->update_grade("Yahia", 89);

// $student_manager->display_students();

$student_manager = new StudentManager();

echo "Welcome To Student Manager!" . "\n";

while (true) {
    echo "1. Add New Student" . "\n";
    echo "2. Remove  Student" . "\n";
    echo "3. Update Student Grade" . "\n";
    echo "4. Display Student" . "\n";
    echo "5. Exit" . "\n";
    echo "Choose an option: ";

    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case "1":
            echo "Enter student name: ";
            $name = trim(fgets(STDIN));
            echo "Enter Student Grade: ";
            $grade = trim(fgets(STDIN));

            $student_manager->add_student($name, $grade);
            break;

        case "2":
            echo "Enter student name to delete: ";
            $name = trim(fgets(STDIN));
            $student_manager->remove_student($name);
            break;

        case "3":
            echo "Enter student name to update: ";
            $name = trim(fgets(STDIN));
            echo "Enter new grade: ";
            $grade = trim(fgets(STDIN));
            $student_manager->update_grade($name, $grade);
            break;

        case "4":
            $student_manager->display_students();
            break;
        case 5:
            echo "Exiting...";
            exit(0);
        default:
            echo "Invalid option.\n";
    }
}