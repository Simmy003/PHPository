<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=55;
    $b=60;
    $c=59;
    $x=$a+$b+$c;
    $avg=($x/300)*100;
    echo "First Marks is:$a <br>";
    echo "Second Marks is:$b <br>";
    echo "Third Marks is:$c <br>";

    echo "The total marks is:$x <br>";


    if($avg>=50){
        echo "<h1 style='color:green'>You passed</h1>";
    }
    else{
        echo "<h1 style='color:red'>You failed</h1>";
    }
    ?>
</body>
</html>