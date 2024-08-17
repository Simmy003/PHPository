<?php
$conn = mysqli_connect("localhost","root","021603","hungry_hippo");

$expiryDate= $_GET["expiryDate"];
$name= $_GET["name"];
$imageURL= $_GET["imageURL"];
$category= $_GET["category"];
$price= $_GET["price"];

$sql = "Insert into foods (name, expiryDate, imageURL, category, price)  values('$name', '$expiryDate',
'$imageURL', '$category', '$price')";
$result = mysqli_query($conn, $sql);

if(!$result){
    die("onooo shett");
}
header("Location:/index.php");
?>