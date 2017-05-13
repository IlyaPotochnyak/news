<?php


require __DIR__ . '/models/news.php';

$news = news_getAll();

//foreach ($ret as $item) {
//    echo $item['title'] . '<br>';
//    echo $item['newText']. '<br>';
//}



include __DIR__ . '/views/index.php';
include __DIR__ . '/views/add.php';
