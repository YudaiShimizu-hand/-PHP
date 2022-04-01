<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <input type="text" name="title">
        </br>
        <textarea name="body"></textarea>
        </br>
        <button tyoe="submit">送信</button>
    </form>
</body>
</html>
