<?php

function articles_all($link){
   $query = "SELECT * FROM articles";
   $result = mysqli_query($link, $query);

   if (!$result)
      die(mysqli_error($link));

   $articles = array();

   while ($row = mysqli_fetch_assoc($result)) {
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

function articles_new($link, $title, $content){ 

   $title = trim($title);
   $content = trim($content);
   if ($title == '') {
      return false;
   }

   $query = "INSERT INTO articles (title, content) VALUES ('" . mysqli_real_escape_string($link, $title) . "', '" . mysqli_real_escape_string($link, $content) . "')";
   $result = mysqli_query($link, $query);

   if (!$result) {
      die(mysqli_error($link));
   }

   return mysqli_insert_id($link);
    // Возвращает идентификатор вставленной записи
}

function articles_edit($link, $id, $title, $content){

   $title = trim($title);
   $content = trim($content);
   $id  = (int)$id;

   if($title=='')
      return false;

   $sql = "UPDATE articles SET title='%s', content='%s' WHERE id=%d";

   $query = sprintf($sql, mysqli_real_escape_string($link, $title),
                        mysqli_real_escape_string($link, $content),
                        $id);
                        
   $result = mysqli_query($link, $query);

   if (!$result)
      die(mysqli_error($link));

   return mysqli_affected_rows($link);
   // Код для редактирования существующей статьи в базе данных
}

function articles_delete($link, $id){
      $id = (int)$id;

      if ($id == 0)
         return false;

      $query = sprintf("DELETE FROM articles WHERE id= '%d'",$id);
      $result =mysqli_query($link, $query);

      if (!$result)
         die(mysqli_affected_rows($link));

   // Код для удаления существующей статьи из базы данных
}
   function article_intro($text, $len= 400){
      return mb_substr($text, 0, $len);
   }

?>
