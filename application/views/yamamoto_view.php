<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html>
<head>
<title>登録Form</title>
</head>
<body>
<form name='test'method=post id='sub'>
<script src ="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<table border>
	<tbody>	


<tr>
<td><p>番号　（必須）</p></td>
<td>
<!-- <select type="text" name="number" required/> -->
<input type="text" name="number" required/>

<!-- <option>1234</option> -->
<!-- <option>5678</option> -->
<!-- <option>9876</option> -->
</select>
</td>
</tr>
<tr>
<td><p>名前(必須)</p></td>
<td>
<?php
// $data = $this->yamamoto_model->select_test();
// echo form_dropdown('select_test',$view_data["select_test"]);
// echo form_dropdown("name",$sample);
?>

<!-- <select type="text" name="name" required/> -->
<input type="text" name="name" required/>
 <!-- <option>$data = $this->yamamoto_model->select_test();</option> -->
<!-- <option>yamamoto</option> -->
<!-- <option>tanaka</option> -->
<!-- <option>aoki</option> -->
</tr></br>
</td>
</tr>
<tr>
<td><p>パスワード(必須)</p></td>
<td>
<input type="password" name="pass"　required/>
</td>
</tr>
<!-- <p>メールアドレス</p>
<input type="text" name="email"/>
<! 連絡先： -->
<!-- なし<input type="radio" name="name" value="なし"> -->
<!-- あり<input type="radio" name="name" value="あり"> -->

</tbody>
</table>

<!-- <input type="submit" value="送信" /> -->
</form>
<input type="submit" value="送信" form='sub'> 
<!-- <input type="submit" value="送信"> -->
</body>
</html>


<!-- submit_test -->
<html>
<head>
<title></title>
<script src ="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
<form id="MyForm" method="Post" action="">
  <!-- <input type="text" id="text" class="text-input" value/> -->
  <input type="hidden" id="hidden-input"/>
</form>

<p class="buttons">
  <input id="button1" type="submit" value="button1" name="hidden-input" class="submit-button"/>
<!--   <input id="button2" type="submit" value="button2" name="hidden-input" class="submit-button"/> -->
</p>
<script>
$(function(){
  $('#button1').click(function(){
    var $frm_id = $('#' + $(this).attr('name'))
      .val($(this).val())
      .parents('form')//.submit();
      .attr('id');
    alert($frm_id);
  });
});
</script>
</body>
</html>
 









 <script type='text/javascript'>
// <!--
// function botan(){
// 	var form = document.forms['test']:
// 	input.method = 'post';
// 	obj.submit();

}
--></script>



<!-- <html>     
<head>  
<title>form.submit</title>  
</head>  
   
<body>  
    
 <form method="post" action="index.php" name="test">  
 <input type="text" name="name" value="">  
 <input type="submit" value="設置完了">  <br>
 <p>「いいえ」を無効化<br>
<input type="radio" name="q3" value="はい"> はい
<input type="radio" name="q3" value="いいえ" disabled> いいえ
<input type="radio" name="q3" value="どちらでもない"> どちらでもない
</p>

 </form>  
 <a href="#" onclick="document.test.submit()">ボタンをクリック</a>  
   
 </body>  
 </html>  -->


<!-- <html>     
<head>  
<title>clicktest</title>  
 <script src ="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>  
 <body>  
<script>
$("a").click(function(){
  alert("aタグ .click() のイベントだよぉ〜！");
});
</script>

 -->
<?php
// $radio = array(TRUE,FALSE);
// $hide = 'hide';
// if($row['name']='0'){
// 	$radio[0] = TRUE;
// 	$radio[1] = FALSE;
// }
// echo form_radio('name' . '0',$radio[0]) .'あり'；
// echo form_radio('name'.$i,'1',$radio[1]).'なし'；
?>

<!-- </body> 
 -->
<!-- </html>  -->