<?php
// Coding problems from ProjectEuler.net
// Problem 2. Even Fibonacci numbers. 31-12-2020
// Each new term in the Fibonacci sequence is generated by adding the previous
// two terms. By starting with 1 and 2, the first 10 terms will be:
// 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
// By considering the terms in the Fibonacci sequence whose values do not exceed
// four million, find the sum of the even-valued terms.

// Function to print Fibonacci numbers of  values less than  or equal to x
function fibonacci_nos_less_than_x(int $x) {

  // Defining variables
  $i = 0;
  $upper_bound = $x;
  $seed_array = array(1, 2);
  $array_of_even_terms = array();

  do {
    $next_fib_no = $seed_array[$i] + $seed_array[$i + 1];
    if($next_fib_no <= $upper_bound) {
      $seed_array[] = $next_fib_no;
    }
    $i++;
  } while($next_fib_no <= $upper_bound);

  // Print $seed_array
  //echo "The values of array of Fibonacci numbers less than $upper_bound are: <br>";
  //print_array($seed_array);
  return $seed_array;
}

// Array printer function.
// This function accepts an array as input and prints each value of the array.
function print_array($array_in) {
  foreach ($array_in as $value) {
    print($value);
    print(', ');
  }
  print('<br>');
}

// Function to test if an integer is even
function is_even (int $value) {
  if($value % 2 == 0) {
    return true;
  } else {
    return false;
  }
}

// Function to return sum of even values of an array
function sum_of_even_terms($array_in){
  $sum_of_even_terms = 0;
  $array_of_even_terms = array();
  foreach ($array_in as $value) {
    if(is_even($value)){
      $array_of_even_terms[] = $value;
    }
  }
  $sum_of_even_terms = array_sum($array_of_even_terms);
  // Array of even terms
  // echo "The array of even terms is<br>";
  //    print_array($array_of_even_terms);


  return $sum_of_even_terms;
}

$upper_bound = 4000000;
print("The sum of even terms of Fibonacci numbers less than $upper_bound is: "
  . sum_of_even_terms(fibonacci_nos_less_than_x($upper_bound)));

 ?>
