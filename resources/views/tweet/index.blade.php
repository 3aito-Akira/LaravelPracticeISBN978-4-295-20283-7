<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width ,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>つぶやきアプリ</title>
</head>
<body>
    <h1>つぶやきアプリ</h1>
@auth
    <div>
        <p>input form</p>
        @if(session('feedback.success'))
        <p style="color: green">{{ session('feedback.success') }}</p>
        @endif
        <form action="{{ route('tweet.create') }}" method="post">
            @csrf
            <label for="tweet-content">tweet</label>
            <span>within 140 letters</span>
            <textarea id="tweet-content" type="text" name="tweet" placeholder="input message"></textarea>
            @error('tweet')
            <p style="color: red;">{{ $message }}</p>
            @enderror
            <button type="submit">submit</button>
        </form>
    </div>
@endauth
<div>
    @foreach($tweets as $tweet)
        <details>
            <summary>{{ $tweet->content }} by {{ $tweet->user->name }}</summary>
            <div>
                <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">update</a>
                <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">delete</button>
                </form>
            </div>
        </details>
    @endforeach
</div>
</body>
</html>
