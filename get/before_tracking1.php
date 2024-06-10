<?php
session_start();
$conn = mysqli_connect("localhost", "server", "dltmxm1234", "dataset");

$data = array();

$sql = "SELECT * FROM tracking01
WHERE NOT EXISTS (SELECT `data0` FROM tracking03 WHERE tracking01.data0 = tracking03.data0) ORDER BY id DESC";
$res = mysqli_query($conn, $sql);

for(; $row = mysqli_fetch_array($res);){

    array_push($data, $row['data0']);
    array_push($data, $row['data1']);
    array_push($data, $row['data2']);
    array_push($data, $row['data3']);
    array_push($data, $row['data4']);
    array_push($data, $row['data5']);

}

echo json_encode($data);

mysqli_close($conn);
?>