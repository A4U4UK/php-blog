<?php
    require_once('database.php');
    require_once("models/articles_m.php");
 
    $link = db_connect();
    $articles = articles_get($link, $_GET['id']);
    include("views/articles.php"); 
?>