<html>
<head>
<title>アップロードフォーム</title>
</head>
<body>

<h3>ファイルのアップロードに成功しました!</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>



</body>
</html>