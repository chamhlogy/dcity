
<?php
$data = $_POST;
$weight = $data['weight'];
$a = "1";
$json_string = json_encode($data);
echo json_encode($data);
file_put_contents('test.json', $json_string);
header("Content-Type: text/html; charset=ut;f8")
error_reporting(E_ALL^E_NOTICE^E_WARNING);
$con = mysql_connect('localhost','root','10086');
if(!$con){
	echo "weilianjie";
}
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
$consigner_address = $consigner_address + $consigner_number;
$consigner_address = $consigner_address + $consignee_name;
mysql_select_db('asdf',$con);//选择数据库（我的是test）
mysql_query("set names utf8");
$q = "INSERT INTO goods (time,type,value,kg,address1,consigner,phone1,address2,consignee,phone2,ps,status) VALUES('$time','$type','$value','$weight','$consigner_address','$consigner_name','$consigner_phone','$consigner_address','$consignee_name','$consignee_phone','$remark','1')";
mysql_query($q,$con);//执行sql
?>