<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<?php echo 'セッションテスト_確認画面';?>

<html>
<head>
<title>登録フォーム</title>
</head>
<body>
<form name='test' method='post' id='session' action ='http://localhost/code3/index.php/session_test/session_v_con/'>
<table border>
<tbody>
	<tr>
	<td><p>番号</p></td>
	<td><select type='integer' name='number' required/>
	<option>12</option>
	<option>34</option>
	<option>56</option>
	<option>78</option>
	</select>
	</td>
	</tr>
	
	<tr>
	<td><p>名前</p></td>	
	<td><input type='text' name='name' required/></td>
	</tr>

	<tr>
	<td><p>パスワード</p></td>
	<td><input type='password' name='pass' required/></td>
	</tr>

	<tr>
	<td><p>登録日</p>
		<p>例)2016-03-08</p></td>
	<td><input type='time' name='time' required/></td>
	</tr>
</tbody>
</table>
	<!-- <a href='http://localhost/code3/index.php/entry_y/get/'><input type="submit" value="送信" form='entry'></a> -->
	<input type="submit" value="登録確認" form='session'>
	<input type="reset" value="クリア">
	<script>
// $("a").click(function get(){
// });
</script>
	<?php
	// if('post') {
	// 	 header('location:http://localhost/code3/index.php/entry_y/entry');
	// 	}
	// else{}
	?>
</form>
</body>
</html>