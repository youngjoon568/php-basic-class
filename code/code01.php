<?php 
$title = "code01 - get, post 방식";
include("./html/top.php");
?>
<!-- <form action="./request.php" method="get"> 
get 방식은 데이터가 브라우저 URL 창에 노출 됨.
posr 방식은 데이터가 노출되지 않음/
-->

<form action="./request.php" method="post">
    <p>
        <label for="userName">Name</label>
        <input type="text" name="username" id="userName" />
    </p>
    <p>
        <label for="userName">Email</label>
        <input type="email" name="useremail" id="userEmail" />
    </p>
    <p><input type="submit" value="로그인"></p>
</form>
<?php 
include("./html/btm.php");
?>