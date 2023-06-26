<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Мой первый Блог</title>
<link rel="stylesheet" href="../custom.css">
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
   <div class="new_theme"> 
      <form method="post" action="index.php?action=edit&id=<?php echo $article['id']; ?>">
         <p  class="title_the">Введите изменения</p>
         <table>
            <tr>
               <td class="name_th">Название</td>
               <td>
               <input type="text" name="title" value="<?php echo isset($article['title']) ? $article['title'] : ''; ?>" class="form-item" autofocus required>
               </td>
            </tr>
            <tr>
               <td class="tx_th">Содержимое</td>
               <td>
               <textarea class="form-item" name="content" required><?php echo isset($article['content']) ? $article['content'] : ''; ?></textarea> 
               </td>
            </tr>
            <tr>
               <td colspan="2">
               <input type="submit" value="Сохранить" class="btn">
               </td>
            </tr>
         </table>
      </form>
   </div>
</div>
</body>
</html>
