<?php
/**
 * Created by PhpStorm.
 * User: potoc
 * Date: 11.05.2017
 * Time: 11:51
 */

function sql_connect()
{
    mysql_connect('localhost', 'root', '');
    mysql_select_db('news');

}

function news_add($newItem) {
    sql_connect();

//    $sql = "INSERT INTO news ('date', 'title', 'newText')
//            VALUES ('".$newItem['date']."', '".$newItem['title']."', '".$newItem['newText']."')";
$sql = "INSERT INTO news (date, title, newText) 
            VALUES ('".$newItem['date']."',
             '".$newItem['title']."', '".$newItem['newText']."')";

    mysql_query($sql);
}