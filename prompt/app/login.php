<?php
include 'connect.php';
$username = $_POST['name'];
$password = $_POST['password'];

	$sql = "select * from bussiness where username = '$username' and password = '$password'";
	$link=mysql_connect('localhost','root','10086');	
      mysql_select_db('asdf');
      mysql_query('set names utf8');
      $result=mysql_query($sql,$link);
      $row=mysql_fetch_array($result);
    $re = xget($sql);
    if($row['online']==1){
      echo 3;
    }else if($row['status']==0){
      echo 2;	
    }else if(count($re)==1){
	$update="update bussiness set online=1 where username='$username'";
	mysql_query($update,$link);
      echo 1; 	
    }else if(!count($re)){
      echo 0;
    }

?>