<?php
session_start();
$conn = mysqli_connect("localhost", "server", "dltmxm1234", "dataset");

$array1 = array();

$sql = "select count(*) from tracking03 order by id desc";
$res = mysqli_query($conn, $sql);

for(; $row = mysqli_fetch_array($res);){

    if($row['count(*)'] == null){$count = 0;}else{$count = $row['count(*)'];}

    array_push($array1, (int)$count);

}

$data = array(
    $array1
);

echo json_encode($data);

mysqli_close($conn);
?>