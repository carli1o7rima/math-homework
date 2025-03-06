<?php

// Function to generate a random math problem
function generateRandomProblem() {
  $operator = rand(1, 3); // 1 for addition, 2 for subtraction, 3 for multiplication
  $numbers = array(rand(1, 10), rand(1, 10));
  if ($operator == 1) {
    return "What is " . $numbers[0] . " + " . $numbers[1] . "?";
  } elseif ($operator == 2) {
    return "What is " . $numbers[0] . " - " . $numbers[1] . "?";
  } else {
    return "What is " . $numbers[0] . " x " . $numbers[1] . "?";
  }
}

// Function to generate a random math answer
function generateRandomAnswer() {
  $operator = rand(1, 3); // 1 for addition, 2 for subtraction, 3 for multiplication
  $numbers = array(rand(1, 10), rand(1, 10));
  if ($operator == 1) {
    return $numbers[0] + $numbers[1];
  } elseif ($operator == 2) {
    return $numbers[0] - $numbers[1];
  } else {
    return $numbers[0] * $numbers[1];
  }
}

// Function to check if the answer is correct
function checkAnswer($answer, $correctAnswer) {
  if ($answer == $correctAnswer) {
    return true;
  } else {
    return false;
  }
}

?>