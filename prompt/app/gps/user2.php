<?php
$link=mysql_connect('localhost','root','10086');	
      mysql_select_db('asdf');
      mysql_query('set names utf8');	
$id=$_POST['id'];
$sql="select * from goods where id='$id'"; 
$result=mysql_query($sql,$link);
$row=mysql_fetch_array($result);
$array = array('address1' =>urldecode($row['address1']),'address2' =>urldecode($row['address2']));
echo json_encode($array);
?>