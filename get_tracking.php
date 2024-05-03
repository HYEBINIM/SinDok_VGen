<meta charset="UTF-8">

<?php
session_start();
$conn = mysqli_connect("localhost", "server", "00000000", "dataset");

$data = array();

//몇개 검색할래?
$search_num = 10;


//제일 최근 제품 10개를 선택
$sql01 = "select * from tracking01 order by lot_code desc limit ".$search_num."";
$res01 = mysqli_query($conn, $sql01);

for($count = 1; $row01 = mysqli_fetch_array($res01); $count++){
    $sql02 = "select * from tracking01 WHERE lot_code = '".$row01['lot_code']."' limit 1";
    $res02 = mysqli_query($conn, $sql02);
    $row02 = mysqli_fetch_array($res02);

    array_push($data, $row02['data0']);
    array_push($data, $row02['data1']);
    array_push($data, $row02['data2']);
    array_push($data, $row02['data3']);
    array_push($data, $row02['data4']);
    array_push($data, $row02['data5']);
    array_push($data, $row02['data6']);

}

echo json_encode($data);

?>