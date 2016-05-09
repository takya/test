<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang = 'ja'> 
<head>
<meta charset = 'utf-8'>
<title>登録一覧表</title>
<link rel="stylesheet" href="../../../css/test.css">
</head>
<body>
	<p><td><?php echo '登録情報一覧表';?></td></p>
<table border>
	
<tr>
	 <td><?php echo '番号';?></td>
	 <td><?php echo '名前';?></td>
	 <td><?php echo 'パスワード';?></td>
	 <td><?php echo '登録日時';?></td>
<tr>
	<?php
	foreach($test as $key => $val)
	{
	?>
<tr>
	 <td><?php echo $val->number;?></td>
	 <td><?php echo $val->name;?></td>
	 <td><?php echo $val->pass;?></td>
	 <td><?php echo $val->time;?></td>
<tr>
	<?php
	}
	?>
</table>
</body>
</html>