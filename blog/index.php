<?php
   require_once('database.php');
   require_once("models/articles_m.php");

   $link = db_connect();
   $articles = articles_all($link);
   include("views/articles.php");
?>
