<?php
$data = $_POST;
$type = $data['type'];
$weight = $data['weight'];
$remark = $data['remark'];
$value = $data['value'];
$time = $data['time'];
$consigner_address = $data['consigner_address'];
$consigner_number = $data['consigner_number'];
$consigner_name = $data['consigner_name']; 
$consigner_phone = $data['consigner_phone'];
$consignee_adress = $data['consignee_adress'];
$consignee_number = $data['consignee_number'];
$consignee_name = $data['consignee_name'];
$consignee_phone = $data['consignee_phone'];
$dbhost = 'localhost:3306';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = '10086';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");
// $sql = "INSERT INTO goods (type, value, kg, phone1, phone2, consigner_name, consigner_number, consignee_name, consignee_number, address1, address2, setting_arrive_time, status, ps) VALUES ('$type','$value','$weight','$consigner_phone','$consignee_phone','$consigner_name','$consigner_number','$consigner_address','$consignee_adress','$time','1','$remark')";
mysqli_select_db( $conn, 'asdf' );
mysqli_query($con, "INSERT INTO `goods`(`id`, `type`, `value`, `money`, `kg`, `sender`, `phone1`, `phone2`, `consigner_id`, `sender_id`, `consigner_name`, `consigner_number`, `consignee_name`, `consignee_number`, `address1`, `address2`, `setting_arrive_time`, `billing_time`, `order_time`, `send_time`, `arrive_time`, `code`, `status`, `ps`, `state`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23],[value-24],[value-25])") or die("存入数据库失败" . mysqli_error());
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($conn));
}
mysqli_close($conn);
?>