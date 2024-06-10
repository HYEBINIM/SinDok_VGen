<?php
session_start();
$conn = mysqli_connect("localhost", "server", "dltmxm1234", "dataset");

$array1 = array();
$array2 = array();
$array3 = array();
$array4 = array();


$sql = "select * from tracking03 WHERE `data5` IS NOT NULL order by id desc limit 50";
$res = mysqli_query($conn, $sql);

for(; $row = mysqli_fetch_array($res);){

    if($row['data2'] == null){$item0 = 0;}else{$item0 = $row['data2'];}
    if($row['data3'] == null){$item1 = 0;}else{$item1 = $row['data3'];}
    if($row['data4'] == null){$item2 = 0;}else{$item2 = $row['data4'];}
    if($row['data5'] == null){$item3 = 0;}else{$item3 = $row['data5'];}

    array_push($array1, (float)$item0);
    array_push($array2, (float)$item1);
    array_push($array3, (float)$item2);
    array_push($array4, (float)$item3);

}

$data = array(
    $array1,
    $array2,
    $array3,
    $array4

);

echo json_encode($data);

mysqli_close($conn);
?>