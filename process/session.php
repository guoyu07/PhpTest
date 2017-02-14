<!DOCTYPE html>
<!--
<#日期 = "2017-2-14">
<#时间 = "23:47:32">
<#人物 = "buff" >
<#备注 = " ">
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /* <#日期 = "2017-2-14">
          <#时间 = "23:47:32">
          <#人物 = "buff" >
          <#备注 = " ">
         */
        session_start();
        if (!isset($_SESSION['username'])) {
            header("location:404.html");
        } else {
            echo "欢迎 " . $_SESSION['username'] . '!<br/>';
        }
        ?>
    </body>
</html>
