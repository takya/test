<!-- <html>
<head>
<title>My Blog</title>
</head>
<body>
	<h1>Welcome to my Blog!</h1>
</body>
</html> -->

<html>
<head>
<title>My Blog</title>
</head>
<body>	

<p>
<?php
echo '2008年', '10月', '7日', '<br />';
print "月曜日";
?>
</p>

<table border>
	<tbody>
		<tr>
			<td>1</td>
			<td>1</td>
			<td>1</td>
			<td>1</td>
		</tr>
		<tr>
			<td>1</td>
			<td>1</td>
			<td>1</td>
			<td>1</td>
		</tr>
		<tr>
			<td>1</td>
			<td>1</td>
			<td>1</td>
			<td>1</td>
		</tr>
	</tbody>
</table>
</body>
</html>;

<!-- <!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>for文の練習（2）</title>
</head>
<body>
<p>年齢を選択してください。</p>
<select>
<script>
var i;
for (i=20; i<=70; i++) {
	document.write('<option value=" i ">' + i + '歳</option>');
}
</script>
</select>
</body>
</html>



<! <table border="1"> -->
 <!-- // <?php 
// for($a = 1; $a <=9; $a++){
    // echo '<tr>';
// for($i = 1; $i <= 9; $i++){
    // $ans = $a * $i;
    // echo '<td>'.$a.'×'.$i.'='.$ans.'</td>';
// }	
    // echo '</tr>';
// }
// ?>
<!-- </table>

<!-- <html>
<head>
<title><?php echo $title;?></title>
</head>
<body>
<h1><?php echo $heading;?></h1>

<h3>My Todo List</h3>

<ul>
<?php foreach ($todo_list as $item):?>

<li><?php echo $item;?></li>

<?php endforeach;?>
</ul>

</body>
</html>
