<?php

require __DIR__ . '/models/news.php';

$items = news_getAll();



include __DIR__ . '/views/index.php';

 ?>
