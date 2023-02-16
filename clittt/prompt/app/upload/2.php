<?php
$link=mysql_connect('localhost','root','10086');	
      mysql_select_db('asdf');
      mysql_query('set names utf8');
$tmp=$_FILES['file']['tmp_name'];			
$name=$_POST['username'];
$path="app/picture/idcardb/".$username.".jpg";
$update="update bussiness set idcardb='$path' where username='$username'";
$result=mysql_query($update,$link);
if(move_uploaded_file($tmp,"../picture/idcardb/".$name.".jpg")&&$result){
    echo 1;
}else{
    echo 0;
}
?>