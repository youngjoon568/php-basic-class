<?php 
$title = "code02 - get 방식 필터링";
include("./html/top.php");
?>
<?php
// http://localhost/code02.php?productid=50

// $product_id = $_GET['productid'];

// get 방식으로 넘어오는 데이터를 구분할 때는 & 을 씀.

// http://localhost/code02.php?productid=50&limit=%EC%95%88%EB%85%95

// $limit = $_GET['limit'];

// 악의적으로 코드를 브라우저창에 입력하는 걸 막는 용도.
// filter_input 값을 필터링할 때 사용 됨.
// FILTER_VALIDATE_INT 은 true, false 값을 반환 예) 숫자면 true.
// 원하는 타입만 들어올 수 있게 함.
$product_id = filter_input(INPUT_GET, 'productid', FILTER_VALIDATE_INT);
$limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);
// if($product_id == false || $limit == false) die();


if($product_id == false) {
    $product_id = '숫자가 아닙니다.';
}
if($limit == false) {
    $limit = '숫자가 아닙니다.';
}
?>
<p>id : <?= $product_id; ?></p>
<p>limit : <?= $limit; ?></p>
<?php 
include("./html/btm.php");
?>