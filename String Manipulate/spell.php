<?php
$spell = "   AbRaCaDaBrA   ";
$trim = trim($spell);
$lowercase = strtolower($trim);
$correct = "abracadabra";
if ($lowercase == $correct) {
    echo "Yasss!! The spell is correct.";
} 
else {
    echo "Onooo!! The wizarding world is at risk.";
}
?>
