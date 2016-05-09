<!-- session_test_1 -->
<?php
    session_start();
?>

<html>
<head><title>PHP TEST</title></head>
<body>

<?php

    if (!isset($_COOKIE["PHPSESSID"])){
        print('初回の訪問です。セッションを開始します。');
    }else{
        print('セッションは開始しています。<br>');
        print('セッションIDは '.$_COOKIE["PHPSESSID"].' です。');
    }

?>

</body>
</html>

<!-- session_test_2 -->
<?php
    // session_start();
?>

<html>
<head><title>PHP TEST</title></head>
<body>

<?php

    if (!isset($_SESSION["visited"])){
        print('初回の訪問です。セッションを開始します。');

        $_SESSION["visited"] = 1;
        $_SESSION["date"] = date('c');
    }else{
        $visited = $_SESSION["visited"];
        $visited++;

        print('訪問回数は'.$visited.'です。<br>');

        $_SESSION["visited"] = $visited;

        if (isset($_SESSION["date"])){
            print('前回の訪問日時は'.$_SESSION["date"].'です。<br>');
        }

        $_SESSION["date"] = date('c');
    }

?>

</body>
</html>