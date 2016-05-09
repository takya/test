<!DOCTYPE html>
<html lang='ja'>
<head>
	<meta charset='utf-8'>
	<title>jqueryの練習</title>
</head>
 <script src ="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<body>
<!-- 	<p>jqueryの練習</p>
	<ul id='main'>
		<li>0</li>
		<li class='item'>1</li>
		<li class='item'>2</li>
		<li>3
			<ul id='sub'>
				<li>3-1</li>
				<li>3-2</li>
				<li class='item'>3-3</li>
				<li class='item'>3-4</li>
				<li>3-5</li>
			</ul>
		</li>
	</ul> -->
	 <script src ="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	 <script>
	// $(function(){
	// 	$('#sub > li:contains(1)').css('color','red');
	// 	// $('#main .item').css('color','red');
		// $('#sub').css('color','red');//id指定

		// $('p').css('color','red').hide('slow');
	});
	</script>
</body>
</html>


<html>
<head>
<meta charset="utf-8" />
<title>clickテスト</title>
<script src="http://code.jquery.com/jquery-2.0.0.js"></script>
</head>
<body>
<!-- <a href>Click</a> -->
<a href='http://localhost/code3/index.php/jquery.view/function set/'>Click</a>
<script>
// $("a").click(function(){
//   alert("Hello");//表示内容
// });
// </script>
<script>
$("a").click(function set(){
});
</script>
</body>
</html>


<?php
function set(){
	
	echo '今日の天気';
}
?>

<html>
<head>
<title>radioテスト</title>
<script type="text/javascript">
   function checkradio( disp ) {
       document.getElementById('sample').style.display = disp;
    }
 	</script>
</head>
<body>
<form>
    <p>
    <input type="radio" name="test" id="r1" value="1" onclick="checkradio('block');" />
    <label for="r1">あり</label>
    <input type="radio" name="test" id="r2" value="2" onclick="checkradio('none');" />
    <label for="r2">なし</label>
    </p>
    <p id="sample">
       入力：<input type="text" name="textform" value="" size="15" />
    </p>
 </form>
</body>
</html>


