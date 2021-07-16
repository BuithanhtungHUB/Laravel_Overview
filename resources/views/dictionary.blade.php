<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dictionary</title>
</head>
<body>
<h1>Dictionary</h1>
<form action="/dictionary" method="POST">
    @csrf
    Input your word:
    <p>
        <input type="text" name="wordIn"  value="{{ $wordIn ?? " " }}">
    </p>
    <p>
        <button type="submit">Translate</button>
    </p>
    <p>
        Vietnamese: {{ $translate ?? " " }}
    </p>
</form>
</body>
</html>
