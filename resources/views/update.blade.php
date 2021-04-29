<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Обновление данных</title>
</head>
<body>
<form method='get' action="<?= route('posts.download')?>">
    Введите id записи: <input type='text' name='id'>
    <input type='submit' value='Загрузить'>
</form>
</body>
</html>
