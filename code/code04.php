<?php 
$cookieName = 'sity';
$cookieValue = 'Seoul';
setcookie($cookieName, $cookieValue, time() - 60, '/');
?>
<?php 
$title = "code04 - 쿠키 삭제";
include("./html/top.php");
?>
<?php 
echo "<p>{$cookieName}의 쿠키가 삭제되었습니다.</p>";
echo "<p>생성된 값은 {$_COOKIE[$cookieName]}입니다.</p>";
?>
<?php 
include("./html/btm.php");
?>
