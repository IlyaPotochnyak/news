<?php
/**
 * Created by PhpStorm.
 * User: potoc
 * Date: 11.05.2017
 * Time: 12:05
 */

require __DIR__ . '/../functions/sql.php';


function news_getAll() {
    sql_connect();
    $sql = 'SELECT * FROM news ORDER BY date DESC';


    $res = mysql_query($sql); var_dump($res); die;

    $ret = [];

   while (false !== $row = mysql_fetch_assoc($res)) {
       $ret[] = $row;
   }
//   var_dump($ret);
    return $ret;
}

function news_getOne($title) {
    sql_connect();
    $sql = "SELECT * FROM news WHERE title='".$title."'";


    $res = mysql_query($sql);

    $ret = [];

    while (false !== $row = mysql_fetch_assoc($res)) {
        $ret[] = $row;
    }
//   var_dump($ret);
    return $ret;
}