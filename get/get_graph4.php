<?php
session_start();
$conn = mysqli_connect("localhost", "server", "dltmxm1234", "dataset");

$array1 = array();
$array2 = array();


$sql = "select * from tracking04 order by id desc limit 50";
$res = mysqli_query($conn, $sql);

for(; $row = mysqli_fetch_array($res);){

    if($row['data0'] == null){$item0 = 0;}else{$item0 = $row['data0'];}
    if($row['data1'] == null){$item1 = 0;}else{$item1 = $row['data1'];}

    array_push($array1, (int)$item0);
    array_push($array2, (int)$item1);

}

$data = array(
    $array1,
    $array2
);

echo json_encode($data);

?>