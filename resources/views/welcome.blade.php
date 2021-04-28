<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POSTS</title>
</head>
<body>
<ul>
    @foreach($posts as $post)
        <li>{{$post->id . ' ' . $post->title . ' ' . $post->content . ' ' . $post->date}}</li>
    @endforeach
    <br>
    <a href="/insert">Вставить пост</a>
    <br>
    <a href="/update">Обновить пост</a>
</ul>

</body>
</html>
