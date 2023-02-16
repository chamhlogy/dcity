<?php
$link=mysql_connect('localhost','root','10086');	
      mysql_select_db('asdf');
      mysql_query('set names utf8');	
if($_POST['bussinessname']&&$_POST['name']){
	$name=$_POST['bussinessname'];
	$update="update bussiness set username='$bussinessname' where username='$name'";
	$result=mysql_query($update,$link);
	if($result){echo "success";}else{echo "failed";}
}
else if($_POST['username']&&$_POST['name']){
	$name=$_POST['username'];
	$update="update user set username='$username' where username='$name'";
	$result=mysql_query($update,$link);
	if($result){echo "success";}else{echo "failed";}
}



?>