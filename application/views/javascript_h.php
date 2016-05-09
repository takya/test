    <script language="javascript" type="text/javascript">
      
     function Display_JS(no){
      
         if(no == "no1"){
      
             document.getElementById("JS").innerHTML = "<p>「元に戻す」をクリックすると元に戻ります。</p>";
      
         }else if(no == "no2"){
      
             document.getElementById("JS").innerHTML = "<p>上記「切り替え」をクリックすると、ここの内容が切り替わります。</p>";
      
         }
     }
      
     </script>
     <h5><a href="javascript:;" onclick="Display_JS('no1')">切り替え</a></h5>
     <h5><a href="javascript:;" onclick="Display_JS('no2')">元に戻す</a></h5>
      
     <div id="JS">
         <p>上記「切り替え」をクリックすると、ここの内容が切り替わります。</p>
     </div>



<html>
<head>
<title>TAG index Webサイト</title>

<script type="text/javascript">
<!--

// パターン1の色設定開始
function color1(){

    document.bgColor = "#eeeeff"; // bgcolor：背景色
    // document.fgColor = "#0080ff"; // text：文字の基本色
    // document.linkColor = "#ff0000"; // link：リンク文字の色
    // document.vlinkColor = "#ff0000"; // vlink：リンク文字の色（アクセス済みのリンク）
    // document.alinkColor = "#ff8000"; // alink：リンク文字の色（クリックした瞬間の色）

}

function color2(){

    document.bgColor = "#fbeae6";
    // document.fgColor = "#ff0000";
    // document.linkColor = "#ff00ff";
    // document.vlinkColor = "#ff00ff";
    // document.alinkColor = "#ff8000";

}
// パターン2の色設定終了

// -->
</script>

</head>
<body>

<tr>
<input type="button" value="パターン1" onClick="color1()"> <?php//クリックでfunctionを呼ぶ ?>
<input type="button" value="パターン2" onClick="color2()">
<tr><input type="button" value="朝の挨拶" onClick="alert('おはよう');">
<input type="button" value="お昼の挨拶" onClick="alert('こんにちは');">
<input type="button" value="夜の挨拶" onclick="alert('こんばんわ');">
</tr>

</body>
</html>
