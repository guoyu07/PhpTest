<?php
if (isset($_GET['out'])) {
    setcookie("username", '',0,'/k_note/note/php/', '127.0.0.1');
    setcookie("password", '',0,'/k_note/note/php/', '127.0.0.1');
    setcookie("y", $_GET['y'], time() + 30, '/k_note/php/', '127.0.0.1');
} else {
    if (isset($_GET['k'])) {
        setcookie("username", $_GET['k'], time() + 30, '/k_note/note/php/', '127.0.0.1');
        setcookie("y", $_GET['y'], time() + 30, '/k_note/note/php/', '127.0.0.1');
    }
}
?>
<!DOCTYPE html>
<!--
<#日期 = "2017-2-14">
<#时间 = "21:06:56">
<#人物 = "buff" >
<#备注 = " ">
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>cookie设置</title>
    </head>
    <body>
        <script>
            parent.location = '../index.php';
        </script>
    </body>
</html>
