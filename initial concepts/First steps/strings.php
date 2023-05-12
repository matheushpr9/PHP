<?php

echo "Hello World!\n";
//obs: the "\n" skip(break) the line
$age = 22;
echo "My age is " . $age .  "years old.\n\n";

echo 'My age is $age years old.'."\n\n";// remember, for php, everything between single quotes(' '), is represented only as a text
//notice the difference in the output
echo "My age is $age years old.\n";

echo "\ttabulated string";//the "/t"tabulate a output

//the special line skip character can change according to the operating system, so PHP created its own variable to represent it that works regardless of the operating system, it is stored in the variable PHP_EOL
echo PHP_EOL . "Example" . PHP_EOL;

//for more, read the documentation in: https://www.php.net/manual/en/language.types.string.php