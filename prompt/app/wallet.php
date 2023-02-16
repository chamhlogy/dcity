<?php
$link=mysql_connect('localhost','root','10086');	
   mysql_select_db('asdf');
   mysql_query('set names utf8');	
if($_POST['bussinessusername']){
	$username=$_POST['bussinessusername'];
	$sql="select * from wallet where username='$username'"; 
	$result=mysql_query($sql,$link);
	$row=mysql_fetch_array($result);
    echo $row['money'];
}
else if($_POST['userusername']){
	$username=$_POST['userusername'];
	$sql="select * from wallet where username='$username'"; 
	$result=mysql_query($sql,$link);
	$row=mysql_fetch_array($result);
	echo $row['money'];
}
else if($_POST['bussiness']&&$_POST['bussinessplus']){
	// echo $_POST['bussinessplus'];
	// echo $_POST['bussiness'];
    $username=$_POST['bussiness'];
    $sql="select * from wallet where username='$username'";
    $result=mysql_query($sql,$link);
	$row=mysql_fetch_array($result);
	$money=$row['money']+$_POST['bussinessplus'];
	$update="update wallet set money='$money' where username='$username'";
	$result1=mysql_query($update,$link);
	if($result1){echo "充值成功";}else{echo "失败";}
}
else if($_POST['bussiness']&&$_POST['bussinessless']){
	// echo $_POST['bussinessplus'];
	// echo $_POST['bussiness'];
    $username=$_POST['bussiness'];
    $sql="select * from wallet where username='$username'";
    $result=mysql_query($sql,$link);
	$row=mysql_fetch_array($result);
	$money=$row['money']-$_POST['bussinessless'];
	$update="update wallet set money='$money' where username='$username'";
	$result1=mysql_query($update,$link);
	if($result1){echo "提现成功";}else{echo "失败";}
}
else if($_POST['user']&&$_POST['userplus']){
    $username=$_POST['user'];
    $sql="select * from wallet where username='$username'";
    $result=mysql_query($sql,$link);
	$row=mysql_fetch_array($result);
	$money=$row['money']+$_POST['userplus'];
	$update="update wallet set money='$money' where username='$username'";
	$result1=mysql_query($update,$link);
	if($result1){echo "成功";}else{echo "失败";}
}
else if($_POST['user']&&$_POST['userless']){
	// echo $_POST['bussinessplus'];
	// echo $_POST['bussiness'];
    $username=$_POST['user'];
    $sql="select * from wallet where username='$username'";
    $result=mysql_query($sql,$link);
	$row=mysql_fetch_array($result);
	$money=$row['money']-$_POST['userless'];
	$update="update wallet set money='$money' where username='$username'";
	$result1=mysql_query($update,$link);
	if($result1){echo "提现成功";}else{echo "失败";}
}
?>