<?php

function getRandomMathProblem($area) {
    $problems = array(
        "algebra" => array(
            "2x + 5 = 13",
            "x^2 + 4x + 6 = 0",
            "Simplify: 3(x^2 + 2x + 1)"
        ),
        "geometry" => array(
            "Find the area of a rectangle with length 5 cm and width 3 cm.",
            "Find the perimeter of a circle with radius 4 cm."
        ),
        "trigonometry" => array(
            "Solve for sin(x): sin(x) = 0.5",
            "Find the angle between two lines: 2x + 3y = 12 and x - 2y = -4."
        )
    );

    $problem = $problems[$area][array_rand($problems[$area])];

    return $problem;
}

?>