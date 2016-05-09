<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


<html lang = 'ja'> 
<head>
<meta charset = 'utf-8'>
<title>登録一覧表</title>
</head>
<body>
<form name='test' method='post' id='session' action ='http://localhost/code3/index.php/session_test/session_entry'>
	<p><td><?php echo '登録情報一覧表_v';?></td></p>
<table border>
	
<tr>
	 <td><?php echo '番号';?></td>
	 <td><?php echo '名前';?></td>
	 <td><?php echo 'パスワード';?></td>
	 <td><?php echo '登録日時';?></td>
<tr>
	<?php
	// foreach($test as $key => $val)
	// {
	?>
<tr>
	 <!-- <td><?php echo $val->number;?></td> -->
	 <!-- <td><?php echo $val->name;?></td> -->
	 <!-- <td><?php echo $val->pass;?></td> -->
	 <!-- <td><?php echo $val->time;?></td> -->
<!-- <tr> -->
	<?php
	// }
	?>
</table>
<input type="submit" value="登録" form='session'>
<input type="submit" value="戻る" form='session'>
</form>
</body>
</html>