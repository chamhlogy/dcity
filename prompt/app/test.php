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

$.ajax({
	type:'post',
	url:'wallet.php',
	dataType:'text',
	data:{"username":"tom"},
	success: function(msg){
		$('#account').html(msg);
		
	}
});





</script>
</body>
</html>





