<?php	
header("Content-Type: text/html; charset=utf8");
error_reporting(E_ALL^E_NOTICE^E_WARNING);//选择数据库（我的是test）

$con=mysql_connect('localhost','root','10086');
mysql_select_db('asdf');
mysql_query("set names utf8");

$a=120.2333333333333333;
$q="INSERT INTO goods (lon2)VALUES('$a')";  
$reslut=mysql_query($q,$con);//执行sql
  if ($reslut){
    echo 1;
  }else{
   echo 0;
  }
?>