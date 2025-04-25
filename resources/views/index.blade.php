<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentāru saraksts</title>
</head>
<body>
    <h1>Visi komentāri</h1>
    <ul>
        @foreach($comments as $comment)
            <li>{{ $comment->content }}</li>
        @endforeach
    </ul>
</body>
</html>