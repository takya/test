<html>
<head>
<title>必須項目テスト</title>

<script type="text/javascript"> 
function check(){

	var flag = 0;

	if(document.test.number.value == ""){ 
		flag = 1;
	}
	else if(document.test.name.value == ""){ 
		flag = 1;
	}
	else if(document.test.pass.value == ""){ 
		flag = 1;
	}
	if(flag){

		alert('必須項目に未入力がありました'); 
		return false; 
	}
	else{
		return true; 
	}

}
</script>

</head>
<body>

<form method="post" name="test" onSubmit="return check()">

<p>番号：<br><input type="text" name="number" size="40"> （必須）</p>

<p>名前：<br><input type="text" name="name" size="40"> （必須）</p>

<p>パスワード：<br><input type="password" name="pass" size="40">（必須）</p>

<p><input type="submit" value="送信"></p>

</form>

</body>
</html>