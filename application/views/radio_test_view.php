<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html>
<head>
<title>ラジオ登録Form</title>
<script src="http://code.jquery.com/jquery-2.0.0.js"></script>
</head>
<body>
<form name='test' method='post' id='radio' action ='http://localhost/code3/index.php/radio_test/radio_entry/'>
<table border>
<tbody>	
<tr>
<td>番号　（必須）</td>
<td>
<!-- <input type="text" name="number" required/> -->
<input type="radio" name="radio01"  id="4" value="4">
<label>first</label>
<!-- <input type='hidden' name='one' value='1'> -->
<!--hiddenのnameがmodelの$numberにgetpotされている-->
<input type="radio" name="radio01" id="5" value="5">
<label>second</label>
<!-- <input type='hidden' name='two' value='2'> -->
<input type="radio" name="radio01" id="6"  value="6">
<label>third</label>
<input type="radio" name="radio01" id="10"  value="10">
<label>forth</label>
<input type="radio" name="radio01" id="20"  value="20">
<label>fifth</label>
<input type='hidden' name='radio01' id='radio01' value='radio01'>
<!-- <input type='hidden' name='radio_v' value=''> -->
<script>
// $("input[name='radio01']:checked").val();
$(function(){
  $('#4,#5,#6,#10,#20').click(function(){
    var $frm_id = $('#' + $(this).attr('name'))
      .val($(this).val())
      .parents('form')//.submit();
      .attr('id');
    // alert($frm_id);
  });
});
</script>
 <script>
$(function(){
    var nowchecked = $('input[name=radio01]:checked').val();
    $('input[name=radio01]').click(function(){
        if($(this).val() == nowchecked) {
            $(this).prop('checked', false);
            nowchecked = false;
        } else {
            nowchecked = $(this).val();
        }
    });
});
      </script>


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

</form>
<input type="submit" value="送信" form='radio'> 
</body>
</html>
