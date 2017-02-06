<?php

require_once __DIR__ . '/../functions/sql.php';
function news_getAll()
{
  sqlConnect();

  $sql = 'SELECT * FROM news';

  return sql_query($sql);

}

function news_insert($data)
{
  // $sql = "ISERT INTO news
  //         (title, text)
  //         VALUES
  //         ('" . $data['title'] ."', '" . $data['title'] ."')
  // ";
  $date = date("d.m.Y H : i : s");
    $u_date = date("U");
    $sql = "INSERT INTO news (date, u_date, title, text)
  VALUES ('" . $date ."', '" . $u_date ."', '" . $data['title'] ."', '" . $data['text'] ."')";
    // echo $sql;

    sql_exec($sql);
}


 ?>
