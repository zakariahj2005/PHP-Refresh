<?php

function begroeting($naam) {

    $uur = date("H");
    

    if($uur<12){

        return "goedemorgen";

    } elseif($uur>=12 && $uur<18){

        return "goedemiddag";

    } else {

        return "goedeavond";
        
    }

    
}
echo begroeting("") . (" nadir") . "<br>";
echo begroeting("") . (" ayoub") . "<br>";
echo begroeting("") . (" mete") . "<br>";
echo begroeting("") . (" zaka") . "<br>";


?>