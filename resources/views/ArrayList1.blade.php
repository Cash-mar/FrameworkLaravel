<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        li{
            font-size: 20px;
        }

    </style>
</head>
<body>
<h1>Список товаров:</h1>
<ol>
    @foreach($arrData as $value)
        <li>{{$value}}</li>
    @endforeach
</ol>
</body>
</html>
