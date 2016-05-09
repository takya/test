<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html>
<head>
<title>登録Form</title>
<link rel="stylesheet" href="../../css/test.css">
</head>
<body>
<form name='test'method=post id='sub'>
<!-- <script src ="http://code.jquery.com/jquery-1.10.1.min.js"></script> -->
<table border>
	<tbody>	


<tr>
<td><sapn class='number'>番号　（必須）</span></td>
<td>
<!-- <input type="text" name="number" required/> -->
<select type="text" name="number" required/>
<option span class='num'>1234</span></option>
<option class='num'>5678</option>
<option>9876</option>
</select>
</td>
</tr>
<tr>
<!-- <td><p>名前(必須)</p></td> -->
<td><label class='name'>名前（必須）</label></td>
<td>
<input type="text" name="name" required/>
</tr></br>
</td>
</tr>
<tr>
<!-- <td><p>パスワード(必須)</p></td> -->
<td><label class='pass'>パスワード（必須）</label></td>
<td>
<input type="password" name="pass"　required/>
</td>
</tr>
</tbody>
</table>

</form>
<input type="submit" value="送信" form='sub'> 
</body>
</html>