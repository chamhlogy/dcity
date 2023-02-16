<?php
$data = $_POST;
$username = $data['name'];
$password = $data['password'];
// $json_string = json_encode($username);
// file_put_contents('test.json', $json_string);
header("Content-Type: text/html; charset=utf8");
$con = new mysqli('localhost','root','10086','asdf');
if (mysqli_connect_errno()) {
    die('Unable to connect!') . mysqli_connect_error();
}
$sql= "SELECT * FROM `bussiness` WHERE `name` LIKE '$username' ";
$result = mysqli_query($con, $sql);
if(!$result){
$c = array("2");
echo json_decode($c);
}
while ($row = mysqli_fetch_assoc($result)) {

}

?>