<?php
session_start();
$conn = mysqli_connect("localhost", "server", "00000000", "dataset");

$data = array();

$sql = "select * from tracking04 order by id desc limit 50";
$res = mysqli_query($conn, $sql);

for(; $row = mysqli_fetch_array($res);){

    array_push($data, $row['data0']);
    array_push($data, $row['data1']);
    array_push($data, $row['data2']);

}

echo json_encode($data);

?>