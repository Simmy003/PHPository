<?php
session_start();

setcookie("theme","dark",time()+(86400 * 30));


if(isset($_POST['Log In'])){
$value = $_POST['email'];
echo "being saved";
$_SESSION['email'] = $value;
header("Location:/");
}

if(isset($_SESSION['email'])){
    echo "you are logged in.";
}

echo $_COOKIE['theme'];
// $_SESSION['user']= "Good Morning";
// $_SESSION['name'] = "Om Shanti";

?>

<form action="/" method = "POST">
<input type = "Email" name= "email" placeholder= "email"/>
<!-- <input type = "Password" placeholder= "password"/> -->
<button type = "Submit" name = "Log In">Log In</button>
</form>