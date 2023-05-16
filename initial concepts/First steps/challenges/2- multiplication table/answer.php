<?php

$number = 7;

for ($counter = 1; $counter <= 10; $counter++){
    echo "$number X $counter = " . $counter * $number . PHP_EOL;
    // or echo $number . " X " . $counter . " = " . $counter * $number . PHP_EOL;
}