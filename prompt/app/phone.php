<?php
header("Content-Type: text/html; charset=utf8");
error_reporting(E_ALL^E_NOTICE^E_WARNING);
$con = mysql_connect('localhost','root','10086');    
       mysql_select_db('asdf',$con);
       mysql_query('set names utf8');    
if($_POST['bussinessphone']&&$_POST['username']){
    $phone = $_POST['bussinessphone'];
    $username = $_POST['username'];
    $update="update bussiness set phone='$phone' where username='$username'";
    $result=mysql_query($update,$con);
    if($result){echo 1;}else{echo "手机号设定";}
}
?>