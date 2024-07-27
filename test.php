<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $randomJoke=array("joke1","joke2","joke3");
    $randomValue=rand(0,2);
    $random=$randomJoke[$randomValue];
    echo $random;
    
?>
</body>
</html>