<html> 
<head>
</head>
<body>
<table border>

	<?php
	// var_dump($test);

		// $a	= array('number'=>1,'name'=>'yamamoto','pass'=>1234);
		// $b  = array('number'=>2,'name'=>'aoki','pass'=>5678);
		// $c	= array('number'=>3,'name'=>'tanaka','pass'=>9012);
		// $name = array($a,$b,$c);

	// foreach($name as $key => $val)
	// {

	// print($key.':'.$val.'</br>');
	?>

<tr>
	 <!-- <td><?php echo $val['number'];?></td><td><?php echo $val['name']?></td><td><?php echo $val['pass']?></td>   -->
</tr>
	<?php
	// }
	?>
</table>
<br>
<table border>

	<?php


	foreach($test as $key => $val)
	{

	// print($key.':'.$val.'</br>');
	?>

<tr>
	 <td><?php echo $val->number;?></td>
	 <td><?php echo $val->name;?></td>
	 <td><?php echo $val->pass;?></td>
<tr>
	<?php
	}
	?>

</table>
</body>
</html>

<!-- <html>
　こんにちはPHPの練習

	<?php
 	echo "Hello";
 	?>

 </html>
 -->
 
<!-- print_rの引数付きのユーザ定義関数 -->
 <?php 
// 	function my_print_r($var)
// {
// 	echo "<pre>";
// 	print_r($var);
// 	echo"</pre>";
// };
// 	$name = array('t','y','u');
// 	my_print_r($name);
// ?>

<?php
//  function plus($num1, $num2)
// {
// 	$sum = $num1 + $num2;
// 	return $sum;
// }

// $sum = plus(10,8);
// print'加算の結果は'.$sum.'です';

// print'加算の結果は'.plus(7,14).'です';

// if文のサンプルコード
// if(1==="1")
// {
 // echo "true";
// }
// else
// {
 // echo "false";
// }


// function outputlnfo($name)
// {
//  $pet = "犬";
//  echo$name."さんは".$pet."を飼っています。";
// }
// outputlnfo("山田");
// ?

// global $test;
// $test = "あいう";

// function A()
// {
	// $test = "テスト";
	// echo "function 内:" . $test . "<br>";
// }
// $test = "テスト";
// A();
// echo "外:" . $test;
// ?
// <html>
// <body>
// function sum($a)
// {
	
// 	$b = 3;
// 	echo $a + $b;
// }
// $a = 5;

 //変数を使用しての表示
 // $変数名＝値；
// $name = 'takuya';
// print $name.'<br>';

// $num = 21;
// print $num*9 .'<br>';
?>


<?php 
//  function plus($num1, $num2)
// {
// 	$sum = $num1 + $num2;
// 	return $sum;
// }

// $sum = plus(10,8);
// print'加算の結果は'.$sum.'です';

// print'加算の結果は'.plus(7,14).'です';




// function mainaus($num1,$num2)
// {
// 	$sum = $num1 - $num2;
// 	return $sum;
// }
// 	$sum = mainaus(20,9);
// 	echo'引き算の結果は'.$sum.'になっています。'.'<br>';
// 	echo'引き算の結果は'.$sum.'になっています。'.'<br>';

// ?>

 <?php
// function tasizan($a,$b)
// {
	
// 	$sum =$a + $b;
// 	return $sum;
// }
// 	$sum = tasizan(1,3);
// 	echo $sum .'になっています。'.'<br>';

// ?>

<?php
// // function rensou()
// // {
// 	$fruit['apple'] = 'リンゴ';
// 	$fruit['greap'] = 'ブドウ';
// 	$fruit['orange'] = 'ミカン';

// 	echo $fruit['orange'];
// // }
// ?>

 <?php
// $point = 100;
// if($point >50 )
// {
// 	echo 'safe';
// }
// else
// {
// 	echo 'out';
// }
?>

<?php
// 	$point = '1';
// 	switch($point)
// 	{
// 		case '1';
// 		echo '成功';
// 		break;
// 		case'2';
// 		echo'失敗';
// 		break;
// 		case'3';
// 		echo'残念';
// 		break;
// 	}
?>

<?php
// 	$a = 5;
// 	while($a > 1)
// 	{
// 	echo $a;
// 	$a--;	
// 	}

// <?php
	// $name = 4;
	// while($name>1)
	// {
	// echo $name;
	// $name--;
	// }
?>


<!-- // echo '<table>';
// $a = 1;
// 	while($a = 3)
// 	{
// 	echo'<tr>';
// 	$b = 1;
// 	while($b = 4)
// 	{
// 	echo "<td><input type='text' name='$a'></td>"
// 	$b++;
// 	}
// 	echo '</tr>';
// 	$a++;
// 	}
// 	echo '</table>';
 -->
<?php
// $name = array('number'=>1,'name'=>'yamamoto','pass'=>1234);
// foreach($name as $key => $val)
// {
// 	print($key.':'.$val.'</br>');
// }
 // echo $this->pagination->create_links(); 
?>



<!-- html>
<head>
</head>
<body>
<table border>
<tr>jkhk
	<td>aaa</td>
	<td>111 </td>
	<td>123 </td>
</tr>
<tr>fffff
	<td> bbbb</td>
	<td> 2222</td>
	<td> </td>
</tr>
<tr>hhhgg
	<td> </td>
	<td> </td>
	<td> </td>
</tr>
</table>
</body>
</html>

