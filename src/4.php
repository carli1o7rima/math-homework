<?php
// Generate a random math problem between 2 and 10
$min = 2;
$max = 10;
$random_number = rand($min, $max);

// Print the problem
echo "What is $random_number x $random_number?";

// Wait for user input
$user_input = readline();

// Validate the input and print the answer
if ($user_input == $random_number * $random_number) {
    echo "Correct! The answer is $random_number squared.";
} else {
    echo "Incorrect. Try again.";
}
?>