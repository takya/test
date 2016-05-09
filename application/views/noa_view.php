<!DOCTYPE html>
<html>
<head>
<title>ページング</title>
</head>
<body>

<?php
echo $this->table->generate($records);
echo $this->pagination->create_links();
?>

</body>
</html>


<html>
<head>
<meta charset="utf-8">
<title>50</title>
<script src="http://code.jquery.com/jquery-2.0.0.js"></script>
</head>
<body>

<a href='http://localhost/code3/index.php/noa_controller/ten/'>10</a>
<script>
$("a").click(function ten(){
});
</script>

<a href='http://localhost/code3/index.php/noa_controller/twenty/'>20</a>
<script>
$("a").click(function twenty(){
});
</script>

<a href='http://localhost/code3/index.php/noa_controller/all/'>全て</a>
<script>
$("a").click(function all(){
});
</script>

</body>
</html>

<!-- <html>
<head>
<meta charset="utf-8" />
<title>50</title>
<script src="http://code.jquery.com/jquery-2.0.0.js"></script>
</head>
<body>
<a href='http://localhost/code3/index.php/noa_controller/twenty/'>20</a>
<script>
$("a").click(function twenty(){
});
</script>
</body>
</html> -->