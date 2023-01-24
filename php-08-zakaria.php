<?php

$array = [11,11,5,2,12,6,7,8,1,10,9];

function telGroteGetallen($array){

    $nummer = 0;
    $somming = [];

    for ($x = 0; $x < count($array); $x++){

        if ($array[$x] > 10){
        array_push($somming, $array[$x]);
        } 

    }

    $optelling = array_sum($somming);

    return($optelling);

}


print_r ( telGroteGetallen( [10,20,20] ));
echo "<br>";
print_r (telGroteGetallen( [9, 10, 11] ));
echo "<br>";
print_r (telGroteGetallen($array));

?>