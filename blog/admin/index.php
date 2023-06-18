<?php
  require_once('../database.php');
  require_once("../models/articles_m.php");

   $link = db_connect();

   if (isset($_GET['action']))
      $action = $_GET['action'];
   else
      $action = "";
   if ( $action== "add"){
      if(!empty($_POST)){
         articles_new($link, $_POST['title'], $_POST['content']);
      }
      include("../views/article_admin_add.php");
   }
   else{
      $articles = articles_all($link);
      include("../views/articles_admin.php");
   }
?>