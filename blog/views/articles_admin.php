<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <title>Document</title>
</head>
<body>
   <div class="topic">
      <h1>Темы по предмету</h1>
      <h2><a href="http://localhost/blog-php/php-blog/blog/">На главную</a></h2>
      <a href="index.php?action=add">Добавить статью</a>
      <div>
         <table class="topic_table">
            <tr>
               <th>Заголовок</th>
               <th></th>
               <th></th>
            </tr>
            <?php foreach ($articles as $a): ?>
               <tr>
                  <td><?= $a['title'] ?></td>
                  <td><a href="index.php?action=edit&id=<?= $a['id'] ?>">Редактировать</a></td>
                  <td><a href="index.php?action=delete&id=<?= $a['id'] ?>">Удалить</a></td>
               </tr>
            <?php endforeach; ?>
         </table>
      </div>
   </div>
</body>
</html>
