<?php
include 'connect.php';
$shm = $_POST['shm'];
$id = $_POST['id'];
	$sql = "select * from goods where id = '$id' and shm = '$shm'";
	$link=mysql_connect('localhost','root','10086');	
      mysql_select_db('asdf');
      mysql_query('set names utf8');
      $result=mysql_query($sql,$link);
      $row=mysql_fetch_array($result);
    $re = xget($sql);
     if(count($re)==1){
	$update="update goods set status=2 where id='$id'";
	mysql_query($update,$link);
      echo 1; 	
    }else{
      echo 0;
    }
?>