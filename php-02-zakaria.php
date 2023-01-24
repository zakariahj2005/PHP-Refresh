<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="GET">
<label for="nummer_1">vul een nummer in</label>
<?php echo "<br>" ?>
<input type="number" name="nummer_1">
<?php echo "<br>" ?>
<label for="nummer_2">vul een nummer in</label>
<?php echo "<br>" ?>
<input type="number" name="nummer_2">
<?php echo "<br>" ?>
<input type ="Submit" value="Submit">

<?php 

 echo "<br> <br>" . $_GET["nummer_1"] . "x" . $_GET["nummer_2"] . "= " . $_GET["nummer_1"] * $_GET["nummer_2"]  ; 

?>


</body>
</html>