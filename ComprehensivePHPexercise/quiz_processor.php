<?php

if (isset($_POST["search"])) {

$oneTwo = $_POST['firsttwo'];
$two = $_POST['Second'];
$twoTwo = $_POST['SecondTwo'];
$three = $_POST['Third'];
$threeTwo = $_POST['ThirdTwo'];
$fourthOne = $_POST['FourthOne'];
$fourthTwo = $_POST['FourthTwo'];
$fourthThree = $_POST['FourthThree'];
$fourthFour = $_POST['FourthFour'];
$fifthOne = $_POST['FifthOne'];
$fifthTwo = $_POST['FifthTwo'];
$fifthThree = $_POST['FifthThree'];
$fifthFour = $_POST['FifthFour'];
$sixthOne = $_POST['SixthOne'];
$sixthTwo = $_POST['SixthTwo'];
$sixthThree = $_POST['SixthThree'];
$sixthFour = $_POST['SixthFour'];
$seven = $_POST['Seventh'];
$eight = $_POST['Eight'];
$nine = $_POST['Nineth'];
$ten = $_POST['Tenth'];

}

$totalCorrect = 0;
$quizResult = 0;



if ($oneTwo != null){
    echo "1.) CORRECT!";
    $totalCorrect++; 
} else {
    echo "1.) INCORRECT";
}


if ($two != null){
    echo "2.) CORRECT!";
    $totalCorrect++; 
} else {
    echo "2.) INCORRECT";
}


if ($threeTwo != null){
    echo "3.) CORRECT!";
    $totalCorrect++; 
} else {
    echo "3.) INCORRECT";
}


if ($fourthOne != null and $fourthTwo != null){
    echo "4.) CORRECT!";
    $totalCorrect++; 
} else {
    echo "4.) INCORRECT";
}

if ($fifthOne != null and $fifthTwo != null){
    echo "5.) CORRECT!";
    $totalCorrect++; 
} else {
    echo "5.) INCORRECT";
}


if ($sixthOne != null and $sixthTwo != null){
    echo "6.) CORRECT!";
    $totalCorrect++; 
} else {
    echo "6.) INCORRECT";
}

if ($seven == "Twelve" or $seven == "twelve"){
    echo "7.) CORRECT!";
    $totalCorrect++; 
} else {
    echo "7.) INCORRECT";
}

if ($eight == "Snake" or $eight == "snake"){
    echo "8.) CORRECT!";
    $totalCorrect++; 
} else {
    echo "8.) INCORRECT";
}

if ($nine == "Dragon" or $nine == "dragon"){
    echo "9.) CORRECT!";
    $totalCorrect++; 
} else {
    echo "9.) INCORRECT";
}

if ($ten == "Rooster" or $ten == "rooster"){
    echo "10.) CORRECT!";
    $totalCorrect++; 
} else {
    echo "10.) INCORRECT";
}


