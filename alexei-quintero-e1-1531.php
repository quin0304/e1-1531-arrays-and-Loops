<?php

function spaceBetweenTaksks(){
    echo "<br/>";
    echo "<br/>";
 }//this function adds two break spaces between tasks


echo "<strong>Task 1</strong>";
spaceBetweenTaksks();//calls the function for adding break spaces
/*
Task 1
Create arrays from the following strings using explode() function:
*/
$fname_str = "John, Jenna, Harry, Don";
$lname_str = "Smith, Cores, Zab, Willson";
$age_str = "15, 25, 35, 45";

/*
Declare variable $fname_arr and assign 
it with array gotten from $fname_str; 
*/

$fname_arr = explode(", ", $fname_str);//declares the variables using the explode function

/* 
Declare variable $lname_arr and assign 
it with array gotten from $lname_str; 
*/

$lname_arr = explode(", ", $lname_str);

/* 
Declare variable $age_arr and assign 
it with array gotten from $age_str; 
*/

$age_arr = explode(", ", $age_str);

echo "<pre>";
print_r($fname_arr);
print_r($lname_arr);
print_r($age_arr);
echo "</pre>";//prints all the ellements in the arrays

/*
Task 2
Use while-loop to print out all array elements of each array from task 1. Every array element needs to be printed in a new line.
*/

spaceBetweenTaksks();
echo "<strong>Task 2</strong>";
spaceBetweenTaksks();

$i=0; //defines variable index
while($i < sizeof($fname_arr)){
    echo $fname_arr[$i] . "<br/>"; 
    $i++;
}
echo "<br/>";

$i=0;
while($i < sizeof($lname_arr)){
   echo $lname_arr[$i] . "<br/>"; 
    $i++;
    }

echo "<br/>";

$i=0;
while($i < sizeof($lname_arr)){
   echo $lname_arr[$i] . "<br/>"; 
    $i++;
    }
    
 /*
Task 3
Concatenate the array values from arrays in task 1 and string literals needed to form the following sentence: Jenna Cores is 25.
Print the concatenated expression.
*/
 
spaceBetweenTaksks();
echo "<strong>Task 3</strong>";
spaceBetweenTaksks();

echo $fname_arr[1] . " " . $lname_arr[1] . " is " . $age_arr[1]; // prints: Jenna Core is 25


/*
Task 4
Use while-loop to add up all array elements of the array $age_arr.
You will need to declare another variable ($sum for example) and assign it with initial value 0. Append the value of each array element (inside the loop) to your variable $sum using += operator. All of this (looping and adding value in the fly) can be replaced with array_sum( ).
Finally, use concatenation to form and print the following sentence: The sum of all array elements is....
*/
 
spaceBetweenTaksks();
echo "<strong>Task 4</strong>";
spaceBetweenTaksks();

$sum = 0;//defines variable sum
$i = 0; //defines variable index
while ($i < sizeof($age_arr)){
  $sum += $age_arr[$i];
  $i++;//repeats previous operation to add all
}
echo $sum;
echo '<br/>';
echo "The sum of all array elements is " . array_sum($age_arr); //prints: The sum of all array elements is 120






?>
