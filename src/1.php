<?php 
    $problems = array(
        "Algebra" => array(
            array("type" => "linear", "difficulty" => "easy", "question" => "Solve for x: 2x + 3 = 7"),
            array("type" => "quadratic", "difficulty" => "medium", "question" => "Solve for x: x^2 + 4x + 4 = 0")
        ),
        "Geometry" => array(
            array("type" => "point-line", "difficulty" => "easy", "question" => "Find the point of intersection of the line y = 3x and the line y = -2x"),
            array("type" => "angle", "difficulty" => "medium", "question" => "If a triangle has angles of 60, 30, and 90 degrees, find the measure of the third angle")
        ),
        "Trigonometry" => array(
            array("type" => "sin", "difficulty" => "easy", "question" => "Find sin(30)"),
            array("type" => "cos", "difficulty" => "medium", "question" => "Find cos(60)")
        )
    );

    $problem = $problems[array_rand($problems)];

    echo $problem["question"];
?>