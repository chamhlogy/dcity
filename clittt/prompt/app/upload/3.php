<?php
$link=mysql_connect('localhost','root','10086');	
      mysql_select_db('asdf');
      mysql_query('set names utf8');
$tmp=$_FILES['file']['tmp_name'];			
$name=$_POST['username'];
$path="app/picture/idcarda/".$username.".jpg";
$update="update bussiness set idcarda='$path' where username='$username'";
$result=mysql_query($update,$link);
if(move_uploaded_file($tmp,"../picture/idcarda/".$name.".jpg"&&$result)){
    echo 1;
}else{
    echo 0;
}
?>