<?php
header("content-type:text/html;charset=utf-8");
// $data = $_POST;

// $json_string = json_encode($weight);
// echo json_encode($data);
// file_put_contents('test.json', $json_string);
// header("Content-Type: text/html; charset=ut;f8")
// error_reporting(E_ALL^E_NOTICE^E_WARNING);
$dbhost = 'localhost:3306';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = '10086';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");

// $username = $data['username'];
// $password = $data['password'];
$id = "1";
$name = "哈哈";
$sex = "男";
$password = "123456789";
$password_phone = "15757255970";
echo 1;

if (mysqli_connect_errno()) {
    die('Unable to connect!') . mysqli_connect_error();
}

$sql    = "UPDATE user SET name = '$name', sex = '$sex', password = '$password', phone = '$password_phone' WHERE id = $id";
$result = mysqli_query($con, $sql);

mysqli_select_db( $conn, 'asdf' );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($conn));
}
mysqli_close($conn);
echo $name." and ".$sex;
?>