<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../custom.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
   <title>Document</title>
</head>
<body>
   <header class="navbar">
         <div class="navbar_icon">
            <p href="https://youtu.be/G1g226zfqsE"><img src="../icon.png" alt="icon" class="icon"></p>
            <p><a class="navbar_text" href="https://youtu.be/G1g226zfqsE">Security-nik</a></p>
         </div>
   </header>
   <div class="topic_top">
      <h1 class="topic_title">Темы по предмету</h1></div>
   <div>
   <div class="topic">
   <button class="back_button"><a  href="http://localhost/blog-php/php-blog/blog/">На главную</a></button>
   <br>
         <button class="add_but"><a href="index.php?action=add">Добавить статью</a></button>
      <div>
         <table class="topic_table">
            <tr>
               <th>Название темы</th>
               <th></th>
               <th></th>
               <th></th>
            </tr>
            <?php foreach ($articles as $a): ?>
               <tr>
                  <td class="theme_edit_title" ><?= $a['title'] ?></td>
                  <td class="td_p"><p class="theme_edit_text"> <?=article_intro_edit( $a['content'] )?></p></td>
                  <td class="edit_but"><a href="index.php?action=edit&id=<?= $a['id'] ?>">Редактировать</a></td>
                  <td class="delete_but"><a href="index.php?action=delete&id=<?= $a['id'] ?>">Удалить</a></td>
               </tr>
            <?php endforeach; ?>
         </table>
      </div>
   </div>
</body>
</html>
