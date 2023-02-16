<?php header("Content-type: text/html; charset=utf-8");
session_start();
$string = file_get_contents("test1.json");// 从文件中读取数据到PHP变量
$data= json_decode($string,true);// 把JSON字符串转成PHP数组
$data = $_POST;
$type  = $data["type"];
$kg = $data["weight"];
$value = $data["value"];
$ps = $data["remark"];//备注
$time  = $data["time"];
$address1 = $data["consigner_address"];
$number = $data["consigner_number"];
$consigner = $data["consigner_name"];
$phone1 = $data["consigner_phone"];

$address2 = $data["consignee_adress"];
$number2 = $data["consigner_number"];
$consignee = $data["consignee_name"];
$phone2 = $data["consignee_phone"];
echo $data["type"];
echo $data["consigner_address"];
echo $value;
echo $type;
echo $kg;
// $address2 = $address2 + $number2;
// $address2 = $address2 + $number2;
// $mysqli = new mysqli('localhost', 'root', '10086', 'asdf');
// //检查连接是否成功

// if (mysqli_connect_errno($mysqli)) {
//     die('Unable to connect!') . mysqli_connect_error();
// }


// $sql = "INSERT INTO goods(type,kg,value,ps,time,address1,number,consigner,phone1,address2,number2,consignee,phone2，state)
// VALUES ($type, $kg,$value,$ps,$time,$address1,$number,$consigner,$phone1,$address2,$number2,$consignee,$phone2,'1')";

// if(mysqli_query($mysqli,$sql)){
//     echo '<script type="text/javascript">alert("成功");</script>';
// } else {
//     echo '<script type="text/javascript">alert("失败");</script>';
// }