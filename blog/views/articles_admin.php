<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../custom.css">
   <title>Document</title>
</head>
<body>
   <header class="navbar">
         <div class="navbar_icon">
            <p href="https://youtu.be/G1g226zfqsE"><img src="../icon.png" alt="icon" class="icon"></p>
            <p><a class="navbar_text" href="https://youtu.be/G1g226zfqsE">Security-nik</a></p>
         </div>
   </header>
   <div class="topic">
   <p class="back_button"><a  href="http://localhost/blog-php/php-blog/blog/">На главную</a></p>
      <h1>Темы по предмету</h1>
         <p class="add_but"><a href="index.php?action=add">Добавить статью</a></p>
      <div>
         <table class="topic_table">
            <tr>
               <th>Название темы</th>
               <th></th>
               <th></th>
            </tr>
            <?php foreach ($articles as $a): ?>
               <tr>
                  <td ><?= $a['title'] ?></td>
                  <td class="edit_but" ><a href="index.php?action=edit&id=<?= $a['id'] ?>">Редактировать</a></td>
                  <td class="delete_but" ><a     href="index.php?action=delete&id=<?= $a['id'] ?>">Удалить</a></td>
               </tr>
            <?php endforeach; ?>
         </table>
      </div>
   </div>
</body>
</html>
