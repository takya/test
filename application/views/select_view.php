<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<title>登録Form</title>
</head>
<body>
<form action=''method=post>

<table border>
	<tbody>	


<tr>
<td><p>番号　（必須）</p></td>
<td>
<?php
// echo form_dropdown("number",$number_test);
?>
<select type="text" name="number" required/>
<option>1234</option>
<option>5678</option>
<option>9876</option>
</select>
</td>
</tr>
<tr>
<td><p>名前(必須)</p></td>
<td>
<?php
// $data = $this->yamamoto_model->select_test();
// echo form_dropdown('select_test',$view_data["select_test"]);
echo form_dropdown("name",$name_test);
?>

<!-- <select type="text" name="name" required/>
 --><!-- <option>$data = $this->yamamoto_model->select_test();</option> -->
<!-- <option>yamamoto</option> -->
<!-- <option>tanaka</option> -->
<!-- <option>aoki</option> -->
<!-- </tr></br> -->
</td>
</tr>
<tr>
<td><p>パスワード(必須)</p></td>
<td>
<input type="password" name="pass"　required/>
</td>
</tr>
<!-- <p>メールアドレス</p>
<input type="text" name="email"/> -->
<!-- 連絡先： -->
<!-- なし<input type="radio" name="name" value="なし"> -->
<!-- あり<input type="radio" name="name" value="あり"> -->

	



</tbody>
</table>

<input type="submit" value="送信" />
</form>


</body>
</html>


<html>
<head>
<title>noa_sample</title>
</head>
<body>
<?php
	// for(var i = 0; i < panel_num; i++){
		// var butten = $()
	// }