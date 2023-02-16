<?php
include 'connect.php';
$username = $_POST['username'];
$paypwd = $_POST['paypwd'];
$sql = "select * from bussiness where username = '$username' and paypwd = '$paypwd'";
$link = mysql_connect('localhost','root','10086');  
        mysql_select_db('asdf');
        mysql_query('set names utf8');
$result=mysql_query($sql,$link);
$row=mysql_fetch_array($result);
$re = xget($sql);
if(count($re)==1){
  echo 1;   
}else{
  echo 0;
}

?>