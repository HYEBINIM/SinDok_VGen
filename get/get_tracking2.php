<?php
session_start();
$conn = mysqli_connect("localhost", "server", "dltmxm1234", "dataset");

$data = array();

$sql03 = "select * from tracking03 order by id desc limit 50";
$res03 = mysqli_query($conn, $sql03);

for (; $row03 = mysqli_fetch_array($res03);) {

    $sql = "select * from tracking02 WHERE data0 = '" . $row03['data1'] . "'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);

    array_push($data, $row['data0']);
    array_push($data, $row['data1']);
    array_push($data, $row['data2']);
    array_push($data, $row['data3']);
    array_push($data, $row['data4']);
    array_push($data, $row['data5']);
}

echo json_encode($data);

mysqli_close($conn);
