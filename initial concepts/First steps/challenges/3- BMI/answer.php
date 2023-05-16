<?php

$height = 1.74;
$weight = 40;

$BMI = $weight/($height**2);

echo "Your BMI id $BMI, ";
if($BMI <18.5){
    echo "you are underweight";
} else if( $BMI < 24.9){
    echo "you are at normal weight";
}else{
    echo "you are overweight";
}