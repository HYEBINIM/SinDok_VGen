<?php
session_start();
$conn = mysqli_connect("localhost", "server", "dltmxm1234", "dataset");

$array1 = array();
$array2 = array();
$array3 = array();
$array4 = array();
$array5 = array();

$sql = "select * from tracking02 order by id desc limit 50";
$res = mysqli_query($conn, $sql);

for(; $row = mysqli_fetch_array($res);){

    if($row['data0'] == null){$item0 = 0;}else{$item0 = $row['data0'];}
    if($row['data1'] == null){$item1 = 0;}else{$item1 = $row['data1'];}
    if($row['data2'] == null){$item2 = 0;}else{$item2 = $row['data2'];}
    if($row['data3'] == null){$item3 = 0;}else{$item3 = $row['data3'];}
    if($row['data4'] == null){$item4 = 0;}else{$item4 = $row['data4'];}

    array_push($array1, (int)$item0);
    array_push($array2, (int)$item1);
    array_push($array3, (int)$item2);
    array_push($array4, (int)$item3);
    array_push($array5, (int)$item4);

}

$data = array(
    $array1,
    $array2,
    $array3,
    $array4,
    $array5,
);

echo json_encode($data);

mysqli_close($conn);
?>