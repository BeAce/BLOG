<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once('config.php');
    // 连库
    if(!($con = mysql_connect(HOST,USERNAME,PASSWORD))){
        echo mysql_error();
    }
   
    // 选库
    if(!(mysql_select_db('article'))){
        echo mysql_error();
    }
    // 编码
    if(!(mysql_query('set names utf8'))){
        echo mysql_error();
    }
    