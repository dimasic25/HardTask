<html lang="ru">
<head>
    <title>Ввод данных</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<form method='post' action="{{ route("posts.update") }}">
    @csrf
    <input type='text' name="id" readonly value="{{$id}}">
    <br><br>
    <input type='text' name='title' placeholder="Название поста" value="{{ $title }}">
    <br><br>
    <input name='content' placeholder="Текст поста" value="{{ $content }}">
    <br><br>
    Введите дату: <input type='date' name='date' value="{{ $date }}">
    <br><br>
    <input type='submit' placeholder="Загрузить">
</form>


</body>
</html>
