<?php
    $names= "Gandalf,Aragorn,Legolas";
    $array = explode(",",$names);
    $n=0;
    foreach ($array as $key => $val) {
        $array[$n] = strtolower($val);
        $n++;
    }
    $result = implode("*",$array);
    echo $result;
?>