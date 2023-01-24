<?php
$string = "Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen.";

function  WoordenTeller($string){
    $teller = 0;
    $Array = explode(" ",$string);

    foreach ($Array as $woord){
           if(strlen($woord) < 4){
            $teller++;
           }
    }
    
   return $teller;
}

echo WoordenTeller("abcd");
echo "<br>";
echo WoordenTeller("Dit is een voorbeeld");
echo "<br>";
echo WoordenTeller("a b c d");
echo "<br>";
echo WoordenTeller($string);

?>
