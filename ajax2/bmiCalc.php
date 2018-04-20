<?php

    $weight = $_REQUEST["weight"];
    $height = $_REQUEST["height"];

    $height = $height / 100;

    $bmi = $weight / ($height * 2);

    $bmi = round($bmi, 1);
	$showBmi = round($bmi, 1);
	echo "<br>" . "Your bmi: " . $showBmi . "<br>";

    switch($bmi) {
        case $bmi < 18.5:
            echo "skinny";
            break;
        case ($bmi > 18.5) && ($bmi < 24.9):
            echo "normal";
            break;
        case ($bmi > 25.0) && ($bmi < 29.9):
            echo "fat";
            break;
        case ($bmi > 30.0) && ($bmi < 34.9):
            echo "Little bit too fat";
            break;
        case ($bmi > 35.0) && ($bmi < 39.9):
            echo "Much fat";
            break;
        case ($bmi > 40) && ($bmi < 1000):
            echo "How can you live with yourself";
            break;
        default:
            echo "Error";
            break;
    }

?>
