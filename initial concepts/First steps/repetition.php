<?php
//display the sequence of numbers from 1 to 15, skipping a line after each number

echo "#1\n";
echo "#2\n";
echo "#3\n";
echo "#4\n";
echo "#5\n";
echo "#6\n";
echo "#7\n";
echo "#8\n";
echo "#9\n";
echo "#10\n";
echo "#11\n";
echo "#12\n";
echo "#13\n";
echo "#14\n";
echo "#15\n";

// or

$counter = 1;

while($counter <=15 ){
    echo "#" . $counter .PHP_EOL;
    $counter = $counter +1;
}