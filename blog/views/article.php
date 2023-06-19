<?php
// Файл article.php (страница отдельной статьи)

// Подключение к базе данных и другие необходимые настройки

// Получение идентификатора статьи из URL
$id = $_GET['id'];

// Получение информации о статье
$article = articles_get($link, $id);

// Проверка, существует ли статья
if (!$article) {
   // Обработка случая, когда статья не найдена
   // Например, перенаправление на страницу со списком статей или отображение сообщения об ошибке
}

// Отображение информации о статье
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <title>Document</title>
</head>
<body>
   <div class="topic">
      <h1>Темы по предмету</h1>
      <h2><a href="http://
