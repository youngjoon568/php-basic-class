<?php 
$title = "request";
include("./html/top.php");
?>
<?php
// $name = $_GET["username"];
// $email = $_GET["useremail"];
$name = $_POST["username"];
$email = $_POST["useremail"];
echo "{$name}님의 이메일은 {$email}입니다";
?>
<?php 
include("./html/btm.php");
?>