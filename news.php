<?php
/**
 * Created by PhpStorm.
 * User: potoc
 * Date: 13.05.2017
 * Time: 14:55
 */

require __DIR__ . '/models/news.php';

$title = $_GET['title'];
//var_dump(news_getOne($title));
$news = news_getOne($title);

include __DIR__ . '/views/index.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="index.php">На главную</a>


</body>
</html>
