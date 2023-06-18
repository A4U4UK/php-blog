<?php

   function articles_all($link){
      $query = "SELECT * FROM articles";
      $result = mysqli_query($link, $query);

      if (!$result)
         die(mysqli_error($link));

      $n = mysqli_num_rows($result);
      $articles = array();
      
      for ($i = 0; $i < $n; $i++){
         $row = mysqli_fetch_assoc($result);
         $articles[] = $row;
      }

      return $articles;
   }

   function articles_get($link, $id){
      $query = sprintf("SELECT * FROM articles WHERE id = %d", (int)$id);
      $result = mysqli_query($link, $query);

      if (!$result)
         die(mysqli_error($link));
      
      $article = mysqli_fetch_assoc($result);

      return $article;
   }

   function articles_new($title, $difficulty, $content){
      // Код для добавления новой статьи в базу данных
   }

   function articles_edit($id, $title, $difficulty, $content){
      // Код для редактирования существующей статьи в базе данных
   }

   function articles_delete($id){
      // Код для удаления существующей статьи из базы данных
   }

?>
