<?php
/* 
특정 세션을 지우는 방법, 모든 세션을 지우는 방법
*/

// session_unset(); // 세션의 모든 변수를 삭제.
session_destroy(); // 세션의 모든 변수를 삭제.
echo $_SESSION['name'];
?>
<?php 
$title = "code06 - 세션 제거";
include("./html/top.php");
?>
<?php 
print_r($_SESSION);
?>
<?php 
include("./html/btm.php");
?>