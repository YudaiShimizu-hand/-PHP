<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <a href='{{route('posts.edit', $post)}}'>編集</a>
    <form method="POST" action="{{route('posts.destroy', $post)}}" id="delete_post">
        @method('DELETE')
        @csrf
        <button>削除</button>
    </form>
    <h2>comment</h2>

    <ul>
        @foreach ($post->comment as $comment)
            <li>{{$comment->body}}</li>
        @endforeach
    </ul>

    <form method="POST" action="{{ route('comments.store', $post)}}">
        @csrf
        <input type="text" name="body">
        <button>コメント</button>
    </form>
    <script>
        'use strict';
        {
            document.getElementById('delete_post').addEventListener('submit', e => {
                e.preventDefault();
                if (!confirm('本当に削除しますか')) {
                    return;
                }
                e.target.submit();
            })
        }
    </script>
</body>
</html>
