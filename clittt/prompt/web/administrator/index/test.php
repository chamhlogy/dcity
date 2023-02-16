<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>测试</title>

</head>

<body><!-- 
<input id="input"> -->
<button onClick="pass()">点击</button>
<p id="account"></p>

<!--<button onClick="passa()">点击</button>-->

<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
function pass(){
$.ajax({
	type:'post',
	url:'test2.php',
	data:{"username":"qwer"},
	dataType:'text',
	success:function(msg){
          alert(msg);
	 },
    error: function(XmlHttpRequest, textStatus, errorThrown){
			 alert(XmlHttpRequest);	
	}
               
});
	// url:'../../../app/gps/user0.php',
}





</script>
</body>
</html>





