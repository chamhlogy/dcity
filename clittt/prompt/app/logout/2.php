<?php
$link = mysql_connect('localhost','root','10086');  
        mysql_select_db('asdf');
        mysql_query('set names utf8');
 $username = $_POST['username'];       
if($_POST['username']){
$username = $_POST['username'];
$update="update user set online=0 where username='$username'";
$b=mysql_query($update,$link);
if($b){echo "已注销";}else{echo "注销失败";}
}
// echo $_POST['bussinessname'];
?>