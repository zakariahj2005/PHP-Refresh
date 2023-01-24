<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$PHPCijfers=[4,5,4,5,6,6,5,8,7,6,4,8];

function AleenOnvoldoendes($PHPCijfers) {
$returnArray=[];
for($i=0; $i<count($PHPCijfers);$i++){
    if ($PHPCijfers[$i] < 6){
        
        array_push($returnArray,$PHPCijfers[$i]);
    }
}
return($returnArray);
}

echo "<pre>";

print_r( AleenOnvoldoendes([4,2,7]) );
print_r( AleenOnvoldoendes([8,3,4,7,2]) );
print_r( AleenOnvoldoendes($PHPCijfers) );


?>
</body>
</html>

