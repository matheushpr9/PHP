<?php

$age = 16;
$numberOfPeople = 1;

echo "You can only enter if you are over 18 years old." . PHP_EOL;

if($age > 18 || $age == 18){
    echo "You can enter, welcome!";
}else{
    echo "You can't enter, get out!" . PHP_EOL;
}
echo PHP_EOL . "---------------------" . PHP_EOL;

//or
echo "You can only enter if you are over 18 years old." . PHP_EOL;
echo "Or, 16 year, accompanied!" . PHP_EOL;

if($age >= 18){
    echo "You can enter, welcome!";
}else if($age >=16 && $numberOfPeople >1){
    echo "You have $age years,and is accompanied, Welcome!";
}else{
    echo "You can't enter, get out!";
}


// boolean operators in PHP (and &&) and (or ||) 

//ternary operator, basically an if / else on a single line, with the following syntax:

$variable = $condition ? $valueIfTrue : $valueIfFalse;

$age = 15;

$message = $age < 18 ? "You are underage " : "you are of legal age";
echo $message;