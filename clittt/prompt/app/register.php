<?php
header("Content-Type: text/html; charset=utf8");
error_reporting(E_ALL^E_NOTICE^E_WARNING);
$con = mysql_connect('localhost','root','10086');    
       mysql_select_db('asdf',$con);
       mysql_query('set names utf8');    
$username = $_POST['username'];
$password = $_POST['password'];
$paypwd = $_POST['paypwd'];
// echo $username;
$a =  "select * from bussiness where username='$username'";     
$resulta = mysql_query($a,$con);
$count = mysql_num_rows($resulta);
if(!$con){
    echo 0;
}else if($count){
    echo 2;
}else{
$q="INSERT INTO bussiness (username,password,paypwd)VALUES('$username','$password','$paypwd')";  
$reslut=mysql_query($q,$con);
  if ($reslut){
    echo 1;
  }else{
    die('Error: ' . mysql_error());
  }
     mysql_close($con); 
}

?>