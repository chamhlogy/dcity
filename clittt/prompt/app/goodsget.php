<?php
$link = mysql_connect('localhost','root','10086');
		mysql_select_db('asdf');
		mysql_query('set names utf8');
$username = $_POST['username'];
$id = $_POST['id'];
$sqli="select * from goods where id='$id'";
$rest=mysql_query($sqli,$link);
$roll=mysql_fetch_array($rest);
$module1 = $roll['typemodule1'];
$module2 = $roll['typemodule2'];
$sql="select * from user where username='$username'";
$res=mysql_query($sql,$link);
$row=mysql_fetch_array($res);
if($row['module1']==0){
	$update="update user set module1='$module1' where username='$username'"; 
	mysql_query($update,$link);
}else if($row['module2']==0){
	$update="update user set module2='$module2' where username='$username'"; 
	mysql_query($update,$link);
}else if($row['module1']){
	$b = 0.5*($row['module1']+$module1);
	$update="update user set module1='$b' where username='$username'"; 
	mysql_query($update,$link);
}else if($row['module2']){
	$a = 0.5*($row['module2']+$module2);
	$update="update user set module2='$a' where username='$username'"; 
	mysql_query($update,$link);
}
$update="update goods set status=1,username2='$username' where id='$id'";  
$a=mysql_query($update,$link);
if($a){echo "成功";}else if($roll['status']==1){echo "此单已被接";}else{echo "失败";}
?>