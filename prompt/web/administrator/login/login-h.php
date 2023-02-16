<?php
include 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
if($_POST){
	$sql = "select * from admin where username = '$username' and password = '$password'";
    $re = xget($sql);
    if(count($re)==1){
      echo 1;	
    }
    else{
      echo 0;
    }
}
?>