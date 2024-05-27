<?php
session_start();
$conn = mysqli_connect("localhost", "server", "dltmxm1234", "dataset");

$data = array();

//Front
$sql01 = "select * from tracking01 order by id desc limit 1";
$res01 = mysqli_query($conn, $sql01);
$row01 = mysqli_fetch_array($res01);

//Rear
$sql02 = "select * from tracking02 order by id desc limit 1";
$res02 = mysqli_query($conn, $sql02);
$row02 = mysqli_fetch_array($res02);

//main
$sql03 = "select * from tracking03 order by id desc limit 1";
$res03 = mysqli_query($conn, $sql03);
$row03 = mysqli_fetch_array($res03);

//조립
$sql04 = "select * from tracking04 order by id desc limit 1";
$res04 = mysqli_query($conn, $sql04);
$row04 = mysqli_fetch_array($res04);

//////////////////////////변수
//제품명
$contents = $row03['contents1'];
//총생산수량 = 메인수량
$sum = $row03['count1'] + $row03['count2'];
//양품수량 = 메인양품
$ok = $row03['count1'];
//불량수량 = 메인불량
$ng = $row03['count2'];
//최근 투입 시간  = F/R 라인중 가장 최근 시간
$time1 = date("Y-m-d H:i:s", strtotime(date('y-m-d')." ".$row01['time']));
$time2 = date("Y-m-d H:i:s", strtotime(date('y-m-d')." ".$row02['time']));
if ($time1 < $time2) {
    $recent_time = $row01['time'];
} else {
    $recent_time = $row02['time'];
}
//!!!!!!!!!!!!!!!!!!!시간당 생산량(목표기준필요) 수정할것!!
//시간당 생산량
$per_hour = $row03['count1'] + $row03['count2'];

//FRONT라인
$F01 = $row01['data0'];
$F02 = $row01['data1'];
$F03 = $row01['data2'];
$F04 = $row01['data3'];
$F05 = $row01['data4'];
$F06 = $row01['data5'];
$F07 = $row01['data6'];
$F08 = $row01['data7'];
$F09 = $row01['data8'];

//REAR라인
$R01 = $row02['data0'];
$R02 = $row02['data1'];
$R03 = $row02['data2'];
$R04 = $row02['data3'];
$R05 = $row02['data4'];
$R06 = $row02['data5'];
$R07 = $row02['data6'];
$R08 = $row02['data7'];
$R09 = $row02['data8'];
$R10 = $row02['data9'];

//메인라인
$FR01 = $row03['data0'];
$FR02 = $row03['data1'];
$FR03 = $row03['data2'];
$FR04 = $row03['data3'];
$FR05 = $row03['data4'];
$FR06 = $row03['data5'];
$FR07 = $row03['data6'];
$FR08 = $row03['data7'];
$FR09 = $row03['data8'];
$FR10 = $row03['data9'];

//조립라인
$A01 = $row04['data0'];
$A02 = $row04['data1'];
$A03 = $row04['data2'];
$A04 = $row04['data3'];
$A05 = $row04['data4'];
$A06 = $row04['data5'];
$A07 = $row04['data6'];
$A08 = $row04['data7'];


array_push($data, $contents);
array_push($data, $sum);
array_push($data, $ok);
array_push($data, $ng);
array_push($data, $recent_time);
array_push($data, $per_hour);

array_push($data, $F01);
array_push($data, $F02);
array_push($data, $F03);
array_push($data, $F04);
array_push($data, $F05);
array_push($data, $F06);
array_push($data, $F07);
array_push($data, $F08);
array_push($data, $F09);

array_push($data, $R01);
array_push($data, $R02);
array_push($data, $R03);
array_push($data, $R04);
array_push($data, $R05);
array_push($data, $R06);
array_push($data, $R07);
array_push($data, $R08);
array_push($data, $R09);
array_push($data, $R10);

array_push($data, $FR01);
array_push($data, $FR02);
array_push($data, $FR03);
array_push($data, $FR04);
array_push($data, $FR05);
array_push($data, $FR06);
array_push($data, $FR07);
array_push($data, $FR08);
array_push($data, $FR09);
array_push($data, $FR10);

array_push($data, $A01);
array_push($data, $A02);
array_push($data, $A03);
array_push($data, $A04);
array_push($data, $A05);
array_push($data, $A06);
array_push($data, $A07);
array_push($data, $A08);

echo json_encode($data);
