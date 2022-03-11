<?php 
/*
client 에 저장 쿠키 ( cookie )
server 측에 저장 세션 ( session )

세션은 
C:\Bitnami\wampstack-8.1.3-0\php\tmp 이 폴더에 저장됨.

name|s:6:"chaeyj";job|s:7:"student";

session

브라우저가 해당 사이트에서 벗어나면 세션 종료
사이트에 접속 했다가 아무것도 안 하면 자동 종료되는 세선 종료

세션은 코드 최상위에 적는게 좋음.
*/

session_start(); // 세션 시작
$_SESSION['name'] = 'chaeyj';
$_SESSION['job'] = 'student';
?>
<?php 
$title = "code05 - 세션 생성";
include("./html/top.php");
?>
<?php 
echo '<p>세션이 등록이 완료되었습니다.</p>';
if(!isset($_SESSION['name'])) {
    echo '<p>세션이 등록되어 있지 않습니다.</p>';
} else {
    echo "<p>{$_SESSION['name']} 세션이 등록되어 있습니다.</p>";
    print_r($_SESSION); // 모든 세션 정보를 연관 배열 형태로 저장 됨 
}
?>
<?php 
include("./html/btm.php");
?>