<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ハロー</h1>
    @foreach($posts as $post)
        <a href='{{route('posts.show', $post)}}'>{{$post->title}}</a>
        <p>{{$post->body}}</p>
    @endforeach

</body>
</html>
