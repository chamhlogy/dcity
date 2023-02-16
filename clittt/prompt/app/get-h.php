<?php
header("Content-Type: text/html; charset=ut;f8")
error_reporting(E_ALL^E_NOTICE^E_WARNING);
$link=mysql_connect('localhost','root','10086');
mysql_select_db('asdf');
mysql_query('set names utf8');	
if($_POST['get-id']&&$_POST['goods-id']){  //将接单人的id和货物id以POST的形式发送
$get-id = $_POST['get-id'];
$goods-id = $_POST['goods-id'];
$update="update goods set status=1,sender='$get-id' where id='$goods-id'";  
$a=mysql_query($update,$link);
if($a){echo "1";}else{echo "0";}	//返回值为1时成功，返回值为0时失败
}else if($_POST['goods-arrive-id']){  //以POST形式接收到达货物的id
$goods-arrive-id = $_POST['goods-arrive-id'];
$update="update goods set status=2 where id='$goods-arrive-id'";
$b=mysql_query($update,$link);	
if($b){echo "1";}else{echo "0";}	//成功收货后返回值为1，收货操作失败返回值为0
}
?>