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


function euro($number){
    $formatted_number = number_format($number , 2);
    return "€" . $formatted_number;

}

$formatted_number = euro(10);
echo $formatted_number;
echo"<br>";
$formatted_number = euro(25.5);
echo $formatted_number;
echo"<br>";
$formatted_number = euro(6.6666);
echo $formatted_number;
echo"<br>";
$formatted_number = euro(14.3);
echo $formatted_number;


    

?>
</body>
</html>