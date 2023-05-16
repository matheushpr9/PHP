<?php

for($counter = 1; $counter <= 15; $counter += 1){//$counter =$counter + 1 == $counter ++ == $counter +=1 
    echo "#" . $counter . PHP_EOL;
}

//to make it clear, for and while do exactly the same thing, which is performing loops in our code.

//but for is usually used when we already know how many repetitions we want, and while is used when the number of repetitions is not predictable