<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html>
<head>
<title>登録Form</title>
<script type="text/javascript">
  function check(){
	var flag = 0;
if(document.test.number.value == ""){
	flag = 1;
	}
	// else if(document.test.name.value == ""){
		// flag = 1;
	// }
	else if(document.test.pass.field3.value == ""){
		flag = 1;
	}
	if(flag){

		window.alert('必須項目に未入力がありました'); 
		return false; 
		}
	else{
		return true;
	}
	}
</script>

<script>
   function checkradio( disp ) {
       document.getElementById('sample').style.display = disp;
    }
</script>
<script src ="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
<form name='test'method=post Submit="return check()">

<table border>
	<tbody>	


<tr>
<td><p>番号　（必須）2桁</p></td>
<td>
<!-- <select type="text" name="number" required/> -->
<p>
    <input type="radio" name="test" id="r1" value="1" onclick="checkradio('block');" />
    <label for="r1">あり</label>
    <input type="radio" name="test" id="r2" value="2" onclick="checkradio('none');" />
    <label for="r2">なし</label>
    <input type="radio" name="test" id="r3" value="3" onclick="checkradio('');" />
    <label for="r1">どちらでもない</label>
    </p>
    <p id="sample">
    <input type="text" name="number" value="" size="15" />
    </p>

</td>
</tr>
<tr>
<td><p>名前(必須)</p></td>
<td>
<input type="text" name="name" required/>
</tr></br>
</td>
</tr>
<tr>
<td><p>パスワード(必須)</p></td>
<td>
<input type="password" name="pass"　required/>
</td>
</tr>

</tbody>
</table>
<!-- <input type="submit" value="送信"> -->
<a href><input type="submit" value="送信" /></a>
<script>
$("a").click(function(){
  alert("登録完了");
});

</script>
</form>
</body>
</html>


