<?php
$link=mysql_connect('localhost','root','10086');	
   mysql_select_db('asdf');
   mysql_query('set names utf8');	
if($_POST['username']){
	$username=$_POST['username'];
	$sql="select * from wallet where username='$username'"; 
	$result=mysql_query($sql,$link);
	$row=mysql_fetch_array($result);
	echo $row['money'];
}
// else if($_POST['user_username']){
// 	$username=$_POST['user_username'];
// 	$sql="select * from wallet where username='$username' and state=1"; 
// 	$result=mysql_query($sql,$link);
// 	$row=mysql_fetch_array($result);
// 	echo $row['money'];
// }else if($_POST['bussiness_plus']){

// }
?>