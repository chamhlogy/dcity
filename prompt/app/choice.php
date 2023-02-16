<?php
$link=mysql_connect('localhost','root','10086');
mysql_select_db('asdf');
mysql_query('set names utf8');
if($_POST['person']){
	$username = $_POST['person'];
	$update="update bussiness set title=1 where username='$username";  
	$a=mysql_query($update,$link);
	if($a){echo 1;}else{echo 0;}
}else if($_POST['bussiness']){
	$username = $_POST['bussiness'];
	$update="update bussiness set title=2 where username='$username";  
	$a=mysql_query($update,$link);
	if($a){echo 1;}else{echo 0;}
}
?>
