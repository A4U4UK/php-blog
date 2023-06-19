<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Мой первый Блог</title>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head> 
<body>
<div class="container">
   <h1>Мой Первый Блог</h1>
   <h1><a href="http://localhost/blog-php/php-blog/blog/">На главную</a></h1>
   <div> 
      <form method="post" action="index.php?action=<?php echo isset($_GET['action']) ? $_GET['action'] : ''; ?>">
         <label> 
            Название
            <input type="text" name="title" value="<?php echo isset($article['title']) ? $article['title'] : ''; ?>" class="form-item" autofocus required>
         </label>
         <label>
            Содержимое
            <textarea class="form-item" name="content" required><?php echo isset($article['content']) ? $article['content'] : ''; ?></textarea> 
         </label>
         <input type="submit" value="Сохранить" class="btn">
      </form>
   </div>
</div>
</body>
</html>
