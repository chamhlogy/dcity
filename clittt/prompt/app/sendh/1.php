<?php     
header("Content-Type: text/html; charset=utf8");
error_reporting(E_ALL^E_NOTICE^E_WARNING);
// $json_string = json_encode($_POST['remark']);
// file_put_contents('test1.json', $json_string);
$con = mysql_connect('localhost','root','10086');
$type = urlencode($_POST['type']);
$weight = urlencode($_POST['weight']); 
$value = urlencode($_POST['value']);
$remark = urlencode($_POST['remark']); 
$time = urlencode($_POST['time']);
$consigner_address = urlencode ($_POST['consigner_address']);
$consigner_number = urlencode ($_POST['consigner_number']);
$consigner_name = urlencode ($_POST['consigner_name']);
$consigner_phone = $_POST['consigner_phone'];
$consignee_address = urlencode ($_POST['consignee_address']);
$consignee_number = urlencode ($_POST['consignee_number']);
$consignee_name = urlencode ($_POST['consignee_name']);
$consignee_phone = urlencode($_POST['consignee_phone']);
$lat1 = $_POST['lat1'];
$lon1 = $_POST['lon1'];
$lat2 = $_POST['lat2'];
$lon2 = $_POST['lon2'];
$shm = $_POST['shm'];
$state = 1;
$username = $_POST['username'];
switch ($_POST['type']) {
	case "文件":
		$typemodule = 1；
		break;
	case "食品":
		$typemodule = 2；
		break;
	case "生鲜":
		$typemodule = 3；
		break;
	case "家具":
		$typemodule = 4；
		break;
	case "百货":
		$typemodule = 5；
		break;	
	case "其他":
		$typemodule = 6；
		break;				
	default:
		$typemodule = 6；
		break;
}
switch ($_POST['time']) {
	case "全天":
		$typemodule2 = 1；
		break;
	case "上午":
		$typemodule2 = 2；
		break;
	case "中午":
		$typemodule2 = 3；
		break;
	case "下午":
		$typemodule2 = 4；
		break;
	case "晚上":
		$typemodule2 = 5；
		break;	
	case "夜间":
		$typemodule2 = 6；
		break;				
	default:
		$typemodule2 = 6；
		break;
}
if(!$con){
$a = array('0');	
echo json_encode($a);
}else{
mysql_select_db('asdf',$con);//选择数据库（我的是test）
mysql_query("set names utf8");
$q="INSERT INTO goods (type,kg,value,ps,setting_arrive_time,address1,consigner_number,consigner_name,phone1,address2,consignee_number,consignee_name,phone2,state,username1,shm,lat1,lon1,lat2,lon2,typemodule1,typemodule2)VALUES('$type','$weight','$value','$remark','$time','$consigner_address','$consigner_number','$consigner_name','$consigner_phone','$consignee_address','$consignee_number','$consignee_name','$consignee_phone','$state','$username','$shm','$lat1','$lon1','$lat2','$lon2','$typemodule1','$typemodule2')";  
$reslut=mysql_query($q,$con);//执行sql
  if ($reslut){
    echo 1;
  }else{
   echo 0;
  }
	 mysql_close($con); 
}
?>