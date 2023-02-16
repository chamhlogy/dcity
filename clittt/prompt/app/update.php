<?php
$link=mysql_connect('localhost','root','10086');
mysql_select_db('asdf');
mysql_query('set names utf8');
if($_POST['username']&&$_POST['sex']){
$username = $_POST['username'];
$sex = $_POST['sex'];
$update="update bussiness set sex='$sex' whe re username='$username'";  
$a=mysql_query($update,$link);
if($a){echo "成功";}else{echo "失败";}	
}else if($_POST['Username']&&$_POST['Sex']){
$username = $_POST['Username'];
$sex = $_POST['Sex'];
$update="update user set sex='$sex' where username='$username'";  
$a=mysql_query($update,$link);
if($a){echo "成功";}else{echo "失败";}	
}
?>