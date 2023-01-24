<?php
$string = "Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen.";
$aantal = 0;

function  WoordenTeller($aantal, $string){
    $teller = 0;
    $Array = explode(" ",$string);

    foreach ($Array as $woord){
           if(strlen($woord) < $aantal){
            $teller++;
           }
    }
   return $teller;
}

echo WoordenTeller(4,"Dit is een voorbeeld");
echo "<br>";
echo WoordenTeller(3,"Dit is een voorbeeld");
echo "<br>";
echo WoordenTeller(1,"Dit is een voorbeeld");
echo "<br>";
echo WoordenTeller(0,"Dit is een voorbeeld");
echo "<br>";
echo WoordenTeller(2,"a b c d");
echo "<br>";
echo WoordenTeller(6,"abcde");
echo "<br>";
echo WoordenTeller(4,$string);
echo "<br>";
echo WoordenTeller(3,$string);
echo "<br>";
echo WoordenTeller(10,$string);


?>