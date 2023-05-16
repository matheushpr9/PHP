<?php

for($counter = 1; $counter <= 20; $counter += 1){//$counter =$counter + 1 == $counter ++ == $counter +=1 
    if($counter == 13){
        continue; // to skip the #13
    }else if($counter >15){
        break; // To stop / break the loop when this happen
    }
    echo "#" . $counter . PHP_EOL;

}

//to make it clear, for and while do exactly the same thing, which is performing loops in our code.

//but for is usually used when we already know how many repetitions we want, and while is used when the number of repetitions is not predictable