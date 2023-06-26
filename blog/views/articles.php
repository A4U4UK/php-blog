<?php
// Подключение к базе данных и другие необходимые настройки

if (isset($_GET['id'])) {
   // Если передан параметр 'id', значит пользователь открывает отдельную тему
   $id = $_GET['id'];

   // Запрос к базе данных для получения данных о статьи с указанным идентификатором
   $query = "SELECT * FROM articles WHERE id = $id";
   $result = mysqli_query($link, $query);

   // Проверка наличия результата и извлечение данных о статьи
   if ($result && mysqli_num_rows($result) > 0) {
      $article = mysqli_fetch_assoc($result);
      ?>

      <!DOCTYPE html>
      <html lang="en">
      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="theme-color" content="#3370ff">
         <link rel="manifest" href="manifest.json">
         <link rel="stylesheet" href="custom.css">
         <title class="main_title"><?= $article['title'] ?></title>
      </head>
      <body>
         <header class="navbar">
            <div class="navbar_icon">
               <p href="https://youtu.be/G1g226zfqsE"><img src="icon.png" alt="icon" class="icon"></p>
               <p><a class="navbar_text" href="https://youtu.be/G1g226zfqsE">Security-nik</a></p>
            </div>
         </header>
         <div class="topic">
            <h2><a href="http://localhost/blog-php/php-blog/blog/">На главную</a></h2>
            <h1><?= $article['title'] ?></h1>
            <div class="topic_block">
               <p class="theme_text_in"><?= $article['content'] ?></p>
            </div>
         </div>
      </body>
      <script>
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('service-worker.js')
      .then(function(registration) {
        console.log('Service Worker зарегистрирован:', registration);
      })
      .catch(function(error) {
        console.log('Ошибка при регистрации Service Worker:', error);
      });
  }
</script>
      </html>

   <?php } else {
      // Если статья не найдена, можно выполнить соответствующие действия, например, перенаправить пользователя на другую страницу
      header("Location: error.php");
      exit();
   }

} else {
   // Если параметр 'id' не передан, значит пользователь находится на главной странице со списком тем

   // Запрос к базе данных для получения списка всех статей
   $query = "SELECT * FROM articles";
   $result = mysqli_query($link, $query);

   // Проверка наличия результата и извлечение данных о статьях
   if ($result && mysqli_num_rows($result) > 0) {
      $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
   } else {
      $articles = array();
   }

   // Закрытие соединения с базой данных

   ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="theme-color" content="#3370ff">
   <link rel="manifest" href="manifest.json">
      <link rel="stylesheet" href="custom.css">
      <title>Темы по предмету</title>
   </head>
   <body>
      <header class="navbar">
         <div class="navbar_icon">
            <p href="https://youtu.be/G1g226zfqsE"><img src="icon.png" alt="icon" class="icon"></p>
            <p><a class="navbar_text" href="https://youtu.be/G1g226zfqsE">Security-nik</a></p>
         </div>
            <a class="navbar_text-admin" href="admin">ADMIN</a>
      </header>
      <div class="topic">
         <h1>Темы по предмету</h1>
         <div>
            <?php foreach ($articles as $a): ?>
               <div class="topic_block">
                  <h3><a href="index.php?id=<?= $a['id'] ?>"><?= $a['title'] ?></a></h3>
                  <p class="theme_text"class="block_text"> <?=article_intro( $a['content'] )?></p>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </body>
   <script>
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('service-worker.js')
      .then(function(registration) {
        console.log('Service Worker зарегистрирован:', registration);
      })
      .catch(function(error) {
        console.log('Ошибка при регистрации Service Worker:', error);
      });
  }
</script>
   </html>

<?php } ?>
