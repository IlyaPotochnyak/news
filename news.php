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



<a href="index.php">На главную</a>
