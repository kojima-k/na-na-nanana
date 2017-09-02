<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="send" method="post">
    {{csrf_field()}}{{$aaa}}
    名前<input type="text" name="name">
    </form>
</body>
</html>