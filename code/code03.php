<?php
$cookieName = 'sity';
$cookieValue = 'Seoul';
// setcookie 쿠키로 세팅하기.
// setcookie(문자, value, 시간(지속), 경로);
setcookie($cookieName, $cookieValue, time() + 60, '/');
/*
$_GET[$name], $_POST[$name], $_COOKIE[$cookieName], $_SESSION 은 
슈퍼글로벌 변수라고 함.
*/
?>
<?php 
$title = "code03 - 쿠키 생성";
include("./html/top.php");
?>
<?php
if (!isset($_COOKIE[$cookieName])) {
    echo "{$cookieName}의 쿠키는 생성되지 않았습니다.";
} else {
    echo "{$cookieName}의 쿠키는 생성되었습니다. ";
    echo "생성된 값은 {$_COOKIE[$cookieName]}입니다.";
}
?>
<?php 
include("./html/btm.php");
?>
