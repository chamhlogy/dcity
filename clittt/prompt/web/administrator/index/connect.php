<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING);

$con = mysql_connect('localhost','root','10086');
//连接数据库
$db = mysqli_connect('localhost','root','10086','asdf');


//连接数据表并返回数据
function connect($tablename){
	global $db;
	mysqli_query($db,'set names utf8');
	$result=mysqli_query($db,"SELECT * FROM ".$tablename." ");
	return $result;
}

function xget($sql){
	global $db;
	$charset = 'set names utf8';
	mysqli_query($db,$charset);
	$re = mysqli_query($db,$sql);
	// if($re && mysqli_num_rows($re) == 1){
		$num=mysqli_num_rows($re);
		$arr = array();
	    for($a = 0;$a < $num; $a++){
		$arr[]=mysqli_fetch_assoc($re);
	    }
	      return $arr;
}
?>