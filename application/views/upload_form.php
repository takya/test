<html>
<head>
<title>アップロードフォーム</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('http://localhost/code3/index.php/upload_test/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="アップロード" />

</form>

</body>
</html>