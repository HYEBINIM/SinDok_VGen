<?php
$sql01 = "
CREATE TABLE IF NOT EXISTS `tracking03` (
ProductNumber int(10) NOT NULL AUTO_INCREMENT,
EndBarcode varchar(20) DEFAULT NULL,
ProductType varchar(20) DEFAULT NULL,
FirstBarcode varchar(20) DEFAULT NULL,
Grade varchar(2) DEFAULT NULL,
Time varchar(10) DEFAULT NULL,

MeasureResult varchar(3) DEFAULT NULL,
SurfaceResult varchar(3) DEFAULT NULL,
Bolt1_X float(10) DEFAULT NULL,
Bolt1_Y float(10) DEFAULT NULL,
Bolt1_Position float(10) DEFAULT NULL,
Bolt1_Result varchar(3) DEFAULT NULL,
Bolt4_X float(10) DEFAULT NULL,
Bolt4_Y float(10) DEFAULT NULL,
Bolt4_Position float(10) DEFAULT NULL,
Bolt4_Result varchar(3) DEFAULT NULL,
Bolt6_X float(10) DEFAULT NULL,
Bolt6_Y float(10) DEFAULT NULL,
Bolt6_Position float(10) DEFAULT NULL,
Bolt6_Result varchar(3) DEFAULT NULL,
Bolt8_X float(10) DEFAULT NULL,
Bolt8_Y float(10) DEFAULT NULL,
Bolt8_Position float(10) DEFAULT NULL,
Bolt8_Result varchar(3) DEFAULT NULL,
Bolt14_X float(10) DEFAULT NULL,
Bolt14_Y float(10) DEFAULT NULL,
Bolt14_Position float(10) DEFAULT NULL,
Bolt14_Result varchar(3) DEFAULT NULL,
Bolt15_X float(10) DEFAULT NULL,
Bolt15_Y float(10) DEFAULT NULL,
Bolt15_Position float(10) DEFAULT NULL,
Bolt15_Result varchar(3) DEFAULT NULL,
Bolt18_X float(10) DEFAULT NULL,
Bolt18_Y float(10) DEFAULT NULL,
Bolt18_Position float(10) DEFAULT NULL,
Bolt18_Result varchar(3) DEFAULT NULL,
Bolt19_X float(10) DEFAULT NULL,
Bolt19_Y float(10) DEFAULT NULL,
Bolt19_Position float(10) DEFAULT NULL,
Bolt19_Result varchar(3) DEFAULT NULL,

Nut_1X float(10) DEFAULT NULL,
Nut_1Y float(10) DEFAULT NULL,
Nut_1Position float(10) DEFAULT NULL,
Nut_1Result varchar(3) DEFAULT NULL,
Nut_4X float(10) DEFAULT NULL,
Nut_4Y float(10) DEFAULT NULL,
Nut_4Position float(10) DEFAULT NULL,
Nut_4Result varchar(3) DEFAULT NULL,
Nut_5X float(10) DEFAULT NULL,
Nut_5Y float(10) DEFAULT NULL,
Nut_5Position float(10) DEFAULT NULL,
Nut_5Result varchar(3) DEFAULT NULL,
Nut_6X float(10) DEFAULT NULL,
Nut_6Y float(10) DEFAULT NULL,
Nut_6Position float(10) DEFAULT NULL,
Nut_6Result varchar(3) DEFAULT NULL,
Nut_7X float(10) DEFAULT NULL,
Nut_7Y float(10) DEFAULT NULL,
Nut_7Position float(10) DEFAULT NULL,
Nut_7Result varchar(3) DEFAULT NULL,
Nut_8X float(10) DEFAULT NULL,
Nut_8Y float(10) DEFAULT NULL,
Nut_8Position float(10) DEFAULT NULL,
Nut_8Result varchar(3) DEFAULT NULL,
Nut_9X float(10) DEFAULT NULL,
Nut_9Y float(10) DEFAULT NULL,
Nut_9Position float(10) DEFAULT NULL,
Nut_9Result varchar(3) DEFAULT NULL,
Nut_10X float(10) DEFAULT NULL,
Nut_10Y float(10) DEFAULT NULL,
Nut_10Position float(10) DEFAULT NULL,
Nut_10Result varchar(3) DEFAULT NULL,
Nut_11X float(10) DEFAULT NULL,
Nut_11Y float(10) DEFAULT NULL,
Nut_11Position float(10) DEFAULT NULL,
Nut_11Result varchar(3) DEFAULT NULL,

Pie_1X float(10) DEFAULT NULL,
Pie_1Y float(10) DEFAULT NULL,
Pie_1Position float(10) DEFAULT NULL,
Pie_1Result varchar(3) DEFAULT NULL,
Pie_3X float(10) DEFAULT NULL,
Pie_3Y float(10) DEFAULT NULL,
Pie_3Position float(10) DEFAULT NULL,
Pie_3Result varchar(3) DEFAULT NULL,
Pie_4X float(10) DEFAULT NULL,
Pie_4Y float(10) DEFAULT NULL,
Pie_4Position float(10) DEFAULT NULL,
Pie_4Result varchar(3) DEFAULT NULL,
Pie_5X float(10) DEFAULT NULL,
Pie_5Y float(10) DEFAULT NULL,
Pie_5Position float(10) DEFAULT NULL,
Pie_5Result varchar(3) DEFAULT NULL,
Pie_6X float(10) DEFAULT NULL,
Pie_6Y float(10) DEFAULT NULL,
Pie_6Position float(10) DEFAULT NULL,
Pie_6Result varchar(3) DEFAULT NULL,
Pie_7X float(10) DEFAULT NULL,
Pie_7Y float(10) DEFAULT NULL,
Pie_7Position float(10) DEFAULT NULL,
Pie_7Result varchar(3) DEFAULT NULL,
Pie_9X float(10) DEFAULT NULL,
Pie_9Y float(10) DEFAULT NULL,
Pie_9Position float(10) DEFAULT NULL,
Pie_9Result varchar(3) DEFAULT NULL,
Pie_10X float(10) DEFAULT NULL,
Pie_10Y float(10) DEFAULT NULL,
Pie_10Position float(10) DEFAULT NULL,
Pie_10Result varchar(3) DEFAULT NULL,
Pie_11X float(10) DEFAULT NULL,
Pie_11Y float(10) DEFAULT NULL,
Pie_11Position float(10) DEFAULT NULL,
Pie_11Result varchar(3) DEFAULT NULL,
Pie_12X float(10) DEFAULT NULL,
Pie_12Y float(10) DEFAULT NULL,
Pie_12Position float(10) DEFAULT NULL,
Pie_12Result varchar(3) DEFAULT NULL,
Pie_13X float(10) DEFAULT NULL,
Pie_13Y float(10) DEFAULT NULL,
Pie_13Position float(10) DEFAULT NULL,
Pie_13Result varchar(3) DEFAULT NULL,
Pie_16X float(10) DEFAULT NULL,
Pie_16Y float(10) DEFAULT NULL,
Pie_16Position float(10) DEFAULT NULL,
Pie_16Result varchar(3) DEFAULT NULL,
Pie_17X float(10) DEFAULT NULL,
Pie_17Y float(10) DEFAULT NULL,
Pie_17Position float(10) DEFAULT NULL,
Pie_17Result varchar(3) DEFAULT NULL,
Pie_19X float(10) DEFAULT NULL,
Pie_19Y float(10) DEFAULT NULL,
Pie_19Position float(10) DEFAULT NULL,
Pie_19Result varchar(3) DEFAULT NULL,
Pie_20X float(10) DEFAULT NULL,
Pie_20Y float(10) DEFAULT NULL,
Pie_20Position float(10) DEFAULT NULL,
Pie_20Result varchar(3) DEFAULT NULL,
Pie_23X float(10) DEFAULT NULL,
Pie_23Y float(10) DEFAULT NULL,
Pie_23Position float(10) DEFAULT NULL,
Pie_23Result varchar(3) DEFAULT NULL,
Pie_24X float(10) DEFAULT NULL,
Pie_24Y float(10) DEFAULT NULL,
Pie_24Position float(10) DEFAULT NULL,
Pie_24Result varchar(3) DEFAULT NULL,
Pie_26X float(10) DEFAULT NULL,
Pie_26Y float(10) DEFAULT NULL,
Pie_26Position float(10) DEFAULT NULL,
Pie_26Result varchar(3) DEFAULT NULL,
Pie_27X float(10) DEFAULT NULL,
Pie_27Y float(10) DEFAULT NULL,
Pie_27Position float(10) DEFAULT NULL,
Pie_27Result varchar(3) DEFAULT NULL,
Pie_28X float(10) DEFAULT NULL,
Pie_28Y float(10) DEFAULT NULL,
Pie_28Position float(10) DEFAULT NULL,
Pie_28Result varchar(3) DEFAULT NULL,
Pie_29X float(10) DEFAULT NULL,
Pie_29Y float(10) DEFAULT NULL,
Pie_29Position float(10) DEFAULT NULL,
Pie_29Result varchar(3) DEFAULT NULL,
Pie_30X float(10) DEFAULT NULL,
Pie_30Y float(10) DEFAULT NULL,
Pie_30Position float(10) DEFAULT NULL,
Pie_30Result varchar(3) DEFAULT NULL,
Pie_31X float(10) DEFAULT NULL,
Pie_31Y float(10) DEFAULT NULL,
Pie_31Position float(10) DEFAULT NULL,
Pie_31Result varchar(3) DEFAULT NULL,
Pie_32X float(10) DEFAULT NULL,
Pie_32Y float(10) DEFAULT NULL,
Pie_32Position float(10) DEFAULT NULL,
Pie_32Result varchar(3) DEFAULT NULL,

MidFrame float(5),
Brk5Angle float(5),
Brk10Angle float(5),
ProductWidth float(10),
PlateCheck varchar(3),

Welding1 varchar(3),
Welding2 varchar(3),
Welding3 varchar(3),
Welding4 varchar(3),
Welding5 varchar(3),
Welding6 varchar(3),
Welding7 varchar(3),
Welding8 varchar(3),
Welding9 varchar(3),
Welding10 varchar(3),
Welding11 varchar(3),

Paint1 varchar(3),
Paint2 varchar(3),
Paint3 varchar(3),
Paint4 varchar(3),
Paint5 varchar(3),
Paint6 varchar(3),
Paint7 varchar(3),
Paint8 varchar(3),
Paint9 varchar(3),
Paint10 varchar(3),
Paint11 varchar(4),
PRIMARY KEY (`ProductNumber`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;
";

//테이블 생성
// $res01 = mysqli_query($conn, $sql01);

$sql02 = "DESC vision";
$res02 = mysqli_query($conn, $sql02);
?>