<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .block__number{
            display: flex;
            font-size: 20px;
        }
        .block__result{
            margin-right: 5px;
        }
    </style>
</head>
<body>
<h1>Вывод четных чисел:</h1>
<div class="block__number">
    <div class="block__result">Результат:</div>
    <div>
        @foreach($arrNumber as $value)
            @if(($value % 2) == 0)
                <span>{{$value}},</span>
            @endif
        @endforeach
    </div>
</div>
</div>
</body>
</html>
