<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Document</title>
</head>
<body>
   <div class="topic">
      <h1>Темы по предмету</h1>
      <a href="admin">ADMIN</a>
      <div>
         <?php foreach($articles as $a): ?>
      <div class="topic_block">
         <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>

         <img class="dif_img" alt="сложность" >
         <p class="block_text"><?=$a['content']?></p>
      </div>
      <?php endforeach?>
      
   </div>
   
</body>
</html>