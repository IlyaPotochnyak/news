<?php

function sqlConnect()
{
  mysql_connect('localhost', 'root', '');
  mysql_select_db('news');# code...
}

function sql_exec($sql)
{
  sqlConnect();
  mysql_query($sql);

}

function sql_query($sql)
{
  sqlConnect();
  $res = mysql_query($sql);

  $ret = [];
  while (false !== $row = mysql_fetch_assoc($res)) {
    $ret[] = $row;
  }
  arsort($ret);
  return $ret;# code...
}


 ?>
