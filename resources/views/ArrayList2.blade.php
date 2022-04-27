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
        .block_1{
            font-size: 20px;
        }
        .block_2
        {
            margin-top: 10px;
            color: white;
        }
        .block_3{
            color: blue;
        }
        .block_4 {
            color: red;
        }
        .block{
            width: 300px;
            padding: 20px;
            background-color: grey;
        }
    </style>
</head>
<body>
<div class="block">
    <h1>Самые распространенные калибры:</h1>
    @foreach($arrCalibre as $value)
        <div class="block__car{{$loop->iteration}}">{{$value}}</div>
    @endforeach
</div>
</body>
</html>
