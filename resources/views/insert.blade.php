<html lang="rus">
<head>
    <title>Ввод данных</title>
    <meta charset="UTF-8">
</head>
<body>
<form method='post' action="{{Route("/")}}">
    {{csrf_field()}}
    Введите название поста: <input type='text' name='title'>
    <br><br>
    <input name='content' placeholder="Текст поста">
    <br><br>
    Введите дату: <input type='date' name='date'>
    <br><br>
    <input type='submit' placeholder="Загрузить">
</form>

</body>
</html>
