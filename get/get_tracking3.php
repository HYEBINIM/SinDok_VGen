<?php
session_start();
$conn = mysqli_connect("localhost", "server", "00000000", "dataset");

$data = array();

$sql = "select * from tracking03 order by id desc limit 50";
$res = mysqli_query($conn, $sql);

for(; $row = mysqli_fetch_array($res);){

    array_push($data, $row['data0']);
    array_push($data, $row['data1']);
    array_push($data, $row['data2']);
    array_push($data, $row['data3']);
    array_push($data, $row['data4']);
    array_push($data, $row['data5']);
    array_push($data, $row['data6']);

}

echo json_encode($data);

?>