<?php
//用来返回上一个页面的滚动条的位置,用完就删除cookie
if (isset($_COOKIE['y'])) {
    $scrollY = $_COOKIE['y'];
    setcookie("y", "", 0, '/k_note/php/', '127.0.0.1');
}
session_start();
?>
<!DOCTYPE html>
<!--
<#日期 = "2017-2-2">
<#时间 = "22:37:29">
<#人物 = "buff +++www.buffge.com+++" >
<#备注 = "php笔记">
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>php笔记</title>
        <link rel="stylesheet" type="text/css" href="public/css/style_1.css" >
    </head>
    <body>
        <header>
            <h1>PHP 学习笔记</h1>
        </header>
        <article id='main'>
            <!--<div id="add_height"></div>-->
