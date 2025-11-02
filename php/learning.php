<?php
//  echo "Hello World!";
//  echo "hello again man";

########### Primitive TsecondNumberpes

// $name ="Ahmed";
// $name = 1234;
// $name = 123.45;
// $name = true;
// $name = null;

//   echo $name;

// $students = ["Ahmed","LotfsecondNumber","Mahmoud","Rabea","Mohamed"];
// echo $students[0];

// $site_url = "google.com";
// $site_url .= "ahmedlotfsecondNumber.site";

// define("MsecondNumber_SITE","ahmedlotfsecondNumber.site");
// echo MsecondNumber_SITE . "\n";
// echo MsecondNumber_SITE . "\n";
// echo MsecondNumber_SITE . "\n";
// echo MsecondNumber_SITE . "\n";

########### Arthimitec Operations

// $coffee_quantitsecondNumber = 3;
// $coffee_price = 3; 
// $coffee_total = $coffee_quantitsecondNumber * $coffee_price;

// $sandwih_quantitsecondNumber = 2;
// $sandwih_price = 5;
// $sandwich_total = $sandwih_quantitsecondNumber * $sandwih_price;

// $total = $coffee_total + $sandwich_total;
// $total_discount = $total - $discount;

// $discount = 5;

// $number_of_friends = 2;  
// $cost_per_person = $total_discount / $number_of_friends;

// echo "Coffee: " . $coffee_total ."\n";
// echo "Sandwich: " . $sandwich_total . "\n";
// echo "Total: " . $total . "\n";
// echo "Total (Discount): " . $total_discount . "\n";
// echo "Per Person: " . $cost_per_person . "\n";

// $firstNumber = 3;
// $secondNumber = 2;
// $remainder = $firstNumber % $secondNumber;

// echo "Remainder:" . $remainder . "\n";

########### Assigment Operations
// $firstNumber = 1;
// $firstNumber += 10; 
// $firstNumber -= 1; 
// $firstNumber /= 2;
// $firstNumber %= 2;
// all operations  
// echo $firstNumber;    

########### Control Structures
########### If Else

// $grade = 40;

// if($grade >=90) {
//     echo "A+";
// } else if ($grade >=80) {
//     echo "B+";
// }else if ($grade >=70) {
//     echo "C+";
// }else if ($grade >=60) {
//     echo "D+";
// } else  {
//     echo "F+";
// }

########### Switch Statment

// $menu_option = 1;

// if($menu_option ==1 ||$menu_option==2 || $menu_option ==8) {
//     echo "Arabic or english selected";
// } else if ($menu_option == 3 || $menu_option ==7) {
//     echo "3. French";
// } else {
//     echo "No option found";
// }

// $menu_option = 1;

// $result = "";

// switch ($menu_option){
//     case 1:
//         $result = "Arabic or english selected";
//         break;
//     case 3:
//     case 7:
//         $result = "3. French";
//         break;
    
//     default:
//         $result = "No option found";
// }


// match (PHP 8.*)
// $menu_option = 1;

// $result = match($menu_option){
//     1 => "Arabic or english selected",
//     7,4 => "3. French",
//     default => "No option found"
// };

// echo $result;


########### Logical Operators

// == lose equalitsecondNumber
// === strict equalitsecondNumber (data tsecondNumberpe)
// != not equal
// !== strict not equal
// <, >, <=, >=
// || -> OR 
// && -> AND

// $firstNumber = 3;
// $secondNumber = "3";

// if($firstNumber === $secondNumber) {
//     echo "Is Equal";
// }

########### Loops
#### While

// $counter = 1; //Start

// while ($counter <=10 ){ //Condition
//     echo $counter . "\n";
//     $counter++;
// }

// do {
//     echo $counter . "\n";
//     $counter++;
// } while ($counter <= 10 );

// for ($counter = 1; $counter <= 10; $counter++) {
//     echo $counter ."\n";
// }

// while(true) {
//     echo "Enter a number" . "\n";

//     $number = fgets(STDIN);

//     if($number >= 0) {
//         echo "secondNumberou entered a positive number" . "\n";
//     } else {
//         echo "secondNumberou entered a negative number BsecondNumbere !" . "\n";
//         break;
//     }
// }

########### Function 

// function sumTwoNumbers(int $firstNumber,int $secondNumber){  // input (parameters)
//     if($firstNumber < 0 || $secondNumber < 0 ) {
//         return -1;
//     }

//     $theResult = $firstNumber + $secondNumber;
//     return $theResult;  // output
// }

// if($result == -1) {
//     echo "Bad Inputs!";
// } else {
//     echo $result ."\n";
// }

// function sumThreeNumbers(int $firstNumber,int $secondNumber,int |float $thirdNumber):int|float{  // input (parameters)
//     if($firstNumber < 0 || $secondNumber < 0 ) {
//         return -1;
//     }

//     $theResult = $firstNumber + $secondNumber;

//     $theResult += $thirdNumber;
//     return $theResult;  // output
// }

// function sumNumbers(...$numbers){  // input (parameters)
//     $theResult = array_sum($numbers);
//     return $theResult;  // output
// }

// $result = sumTwoNumbers(3,4);
// $result = sumTwoNumbers(5,5);
// $result = sumTwoNumbers(-1,-10);
// $result = sumTwoNumbers("ahmed",-10);
// $result = sumThreeNumbers( 3,4,10.3,);
// $result = sumNumbers( 3,4,10,33);
// echo $result;

## Call by value
// function addOne(int $number) {
//     $number++;
//     return $number;
// }

// $a = 10;
// $result = addOne($a);

// echo "a: " . $a . "\n";
// echo "result: " . $result . "\n";


## Call by reference
# adding & infront of the variable parameter then it pass the reference in memory of the variable 
// function addOne(int &$number) {
//     $number++;
//     return $number;
// }

// $a = 10;
// $result = addOne($a);

// echo "a: " . $a . "\n";
// echo "result: " . $result . "\n";



########### Array - Indexed
#### Datastrucrure

// $numbers = ["5","9","13"];

// // Access  Array By (index start from 0) 
// // Last Index = 1 
// echo $numbers[0] ."\n";
// echo $numbers[1] ."\n";
// echo $numbers[2] ."\n";

// $names = ["Ahmed","Walaa","Elshenawy","Rabea"];
// $names = ["Ahmed",12,"Elshenawy",false];

// echo $names[0] ."\n";
// echo $names[1] ."\n";
// echo $names[2] ."\n";
// echo $names[3] ."\n";

// // for($index = 0; $index < count($names); $index++) {
// //     echo "ForLoop: " . $names[$index] ."\n";
// // }

// array_push($names,"Fathy","Ali","Mariam");

// $lastPerson = array_pop($names);

// print_r($names);

// echo "Last Index: " . $lastPerson . "\n";

// $names = ["Ahmed"];
// $students = ["Fatheya"];
// $merged_names = array_merge($names,$students);

// print_r($merged_names);

// ### Queue FIFO data structure example
// $names_queue = ["Ahmed", "Mohamed","Manar","Basmala"];

// function enqueue($element) {
//     global $names_queue;
//     array_push($names_queue,$element);
// }

// function dequeue() {
//     global $names_queue;
//     array_shift($names_queue);

// }

// print_r($names_queue);

// enqueue("Fathy");

// print_r($names_queue);

// dequeue();

// print_r($names_queue);

// ### STACK LIFO data structure example
// $book_stack = ["Atomic Habits", "Happy Place","The Seven Year Slip","A Man Called Ove"];

// function addToStack($element) {
//     global $book_stack;
//     array_unshift($book_stack,$element);
// }

// function removeFromStack() {
//     global $book_stack;
//     array_shift($book_stack);

// }

// print_r($book_stack);

// removeFromStack();

// addToStack("Better Than the Movies");

// print_r($book_stack);

// addToStack("One Last Rainy Day");

// print_r($book_stack);

// removeFromStack();

// print_r($book_stack);



// ### Indexed Array

// $seating_list = [
//     ["A1","A2","A3","A4"],
//     ["B1","-","B3","B4"],
//     ["C1","C2","-","C4"]
// ];

// // Outsputs seats per row
// echo "Seat Is Taken: " . "\n";

// for ($row = 0; $row < count($seating_list); $row++) {
//     echo "Row: " . $row+1 . " | \t";
//     for($seat = 0; $seat < count($seating_list[$row]); $seat++) {
//         $seat_per_row =  $seating_list[$row][$seat];

//         if($seat_per_row == "-") {
//             $seat_per_row = "X";
//         }

//             echo $seat_per_row . "\t";
//     }
//     echo "\n";
// }

// echo "Seat Per Row: " . count($seating_list[0]) . " Seats";

### Associative Arrays

// // indexed array
// $number = ["1","2"];

// $number[0];

// associative array 
// $person = ["first_name" => "Yahia"];

// $age = ["age" => 39];
// echo $person["first_name"] . "\n";
// echo $person["age"] . "\n";

// $persons = [
//     ["first_name" => "Ahmed","age" => 39],
//     ["first_name" => "Mohamed","age" => 49]
// ];

// // echo $person[0]["first_name"] . "\n";
// // echo $person[0]["age"] . "\n";
// // echo $person[1]["first_name"] . "\n";
// // echo $person[1]["age"] . "\n";

// foreach($persons as $person) {
//     echo $person["first_name"] . "\n";
//     echo $person["age"] . "\n";
// }


// print_r($persons);

// // mutating associative array
// $person = ["first_name" => "Ahmed","age" => 3];

// print_r($person);

// $person["grade"] = 90;

// print_r($person);

// $keys = array_keys($person);
// $values = array_values($person);
// print_r($keys); 
// print_r($values); 

// foreach($keys as $key) {
//     echo "key: " . $key . "\t" . "value: " . $person[$key] . "\n";
// }

