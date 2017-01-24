<?php

require __DIR__ . '/models/news.php';

if (!empty ($_POST)) {
  $data = [];
  if (!empty ($_POST['title'])) {
    $data['title'] = $_POST['title'];# code...
  }
  if (!empty ($_POST['text'])) {
    $data['text'] = $_POST['text'];# code...
  }
  if (isset($data['title']) && isset($data['text'])) {
    // var_dump ($data);
    // die;
    news_insert($data);

    header('Location: /');
    die;
  }
}

include __DIR__ . '/views/add.php';

 ?>
