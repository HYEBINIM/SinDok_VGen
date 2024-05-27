<?php
$servername = "localhost";
$username = "server";
$password = "dltmxm1234";
$dbname = "dataset";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT tracking01.*, 
               tracking02.data0 AS t2_data0, tracking02.data1 AS t2_data1, tracking02.data2 AS t2_data2, tracking02.data3 AS t2_data3, tracking02.data4 AS t2_data4, tracking02.data5 AS t2_data5,
               tracking03.data0 AS t3_data0, tracking03.data1 AS t3_data1, tracking03.data2 AS t3_data2, tracking03.data3 AS t3_data3, tracking03.data4 AS t3_data4, tracking03.data5 AS t3_data5,
               tracking04.data0 AS t4_data0, tracking04.data1 AS t4_data1, tracking04.data2 AS t4_data2, tracking04.data3 AS t4_data3, tracking04.data4 AS t4_data4, tracking04.data5 AS t4_data5
        FROM tracking01
        INNER JOIN tracking02 ON tracking01.lot_code = tracking02.lot_code 
        INNER JOIN tracking03 ON tracking01.lot_code = tracking03.lot_code 
        INNER JOIN tracking04 ON tracking01.lot_code = tracking04.lot_code";

$result = $conn->query($sql);

// 배열을 준비합니다.
$results_array = array();

if ($result->num_rows > 0) {
    // 결과를 배열에 저장합니다.
    while($row = $result->fetch_assoc()) {
        $results_array[] = $row;
    }
    // 배열을 JSON으로 인코딩하고 출력합니다.
    echo json_encode($results_array);
} else {
    echo json_encode(array("message" => "0 results"));
}

$conn->close();
?>