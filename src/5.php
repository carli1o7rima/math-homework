<?php
// Math Homework Problems
function getRandomMathProblem() {
    // Generate a random math problem
    $problem = rand(1, 5) . " + " . rand(1, 5) . " = ";
    return $problem;
}
?>