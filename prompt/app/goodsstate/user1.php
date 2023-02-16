<?php
header("Content-type:text/html;charset=utf-8" );
mysql_query('set names utf8');
$username=$_POST['username'];  
$json = '';
$data = array();
class User 
{
	public $id;
	public $type;
	public $value;
	public $money;
	public $kg;
	public $phone1;
	public $sender;
	public $consigner_name;
	public $consigner_number;
	public $consignee_name;
	public $consignee_number;
	public $phone2;
	public $address1;
	public $address2;
	public $setting_arrive_time;
	public $billing_time;
	public $order_time;
	public $send_time;
	public $arrive_time;
    public $code;
	public $status;
	public $ps;
	public $state;
	public $username1;
	public $username2;
}
$conn = mysqli_connect('localhost','root','10086','asdf');


$Page_size=5; 
$a = "select * from goods where username2='$username' and status=2";
$resulta=mysql_query($a);
$count = mysql_num_rows($resulta);
$page_count = ceil($count/$Page_size); 

$init=1; 
$page_len=7; 
$max_p=$page_count; 
$pages=$page_count; 

//判断当前页码 
if(empty($_GET['page'])||$_GET['page']<0){ 
$page=1; 
}else { 
$page=$_GET['page']; 
} 

$offset=$Page_size*($page-1); 
$sql="select * from goods where username2='$username' and status=1 limit $offset,$Page_size"; 
$result=mysqli_query($conn,$sql,'set names utf8');
$result = $conn->query($sql);

if($result){
while ($row = mysqli_fetch_array($result,MYSQL_ASSOC))
{
$user = new User();
$user->id = $row['id'];
$user->type = $row['type'];
$user->value = $row['value'];
$user->money = $row['money'];
$user->kg = $row['kg'];
$user->phone1 = $row['phone1'];
$user->sender = $row['sender'];
$user->consigner_name = $row['consigner_name'];
$user->consigner_number = $row['consigner_number'];
$user->consignee_name = $row['consignee_name'];
$user->consignee_number = $row['consignee_number'];
$user->phone2 = $row['phone2'];
$user->address1 = $row['address1'];
$user->address2 = $row['address2'];
$user->setting_arrive_time = $row['setting_arrive_time'];
$user->billing_time = $row['billing_time'];
$user->order_time = $row['order_time'];
$user->send_time = $row['send_time'];
$user->arrive_time = $row['arrive_time'];
$user->code = $row['code'];
$user->status = $row['status'];
$user->ps = $row['ps'];
$user->state = $row['state'];
$user->username1 = $row['username1'];
$user->username2 = $row['username2'];
$data[]=$user;
}
//把数据转换为JSON数据.
/*echo "{".'"user"'.":".$json."}";*/
$json_string = urldecode(json_encode($data));
echo ($json_string);
}

/*
while($row=mysql_fetch_array($result)){	
echo $row[2];
	
}
*/

/*echo json_encode($array);*/
?>





 