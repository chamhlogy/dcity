<?php
$link=mysql_connect('localhost','root','10086');
mysql_select_db('asdf');
mysql_query('set names utf8');	
if($_POST['examine-pass']){
$examinepass = $_POST['examine-pass'];
$update="update bussiness set status=1 where id='$examinepass'";  
$a=mysql_query($update,$link);
if($a){echo "成功";}else{echo "失败";}	
}else if($_POST['examine-notpass']){
$examinenotpass = $_POST['examine-notpass'];
$update="update bussiness set status=2 where id='$examinenotpass'";
$b=mysql_query($update,$link);	
if($b){echo "成功";}else{echo "失败";}	
}else if($_POST['user-pass']){
$userpass = $_POST['user-pass'];
$update="update user set status=1 where id='$userpass'";
$b=mysql_query($update,$link);
if($b){echo "成功";}else{echo "失败";}	
}else if($_POST['user-notpass']){
$usernotpass = $_POST['user-notpass'];
$update="update user set status=2 where id='$usernotpass'";
$b=mysql_query($update,$link);
if($b){echo "成功";}else{echo "失败";}	
}
?>