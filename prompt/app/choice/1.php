<?php
$link=mysql_connect('localhost','root','10086');
mysql_select_db('asdf');
mysql_query('set names utf8');	
$username = $_POST['username'];
$update="update bussiness set type=1 where username='$username'";  
$a=mysql_query($update,$link);
if($a){
	echo 1;
}else{
	echo 0;
}
?>