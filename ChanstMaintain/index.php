<?php
// index.php

// 设置页面编码为UTF-8
header('Content-Type: text/html; charset=utf-8');

// 读取/pages/index.html文件内容
$content = file_get_contents('pages/index.html');

// 输出内容到浏览器
echo $content;
?>