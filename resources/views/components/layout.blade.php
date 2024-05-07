<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
</head>
<body>
    <h1 class="bg-dark p-5 text-center text-white">{{$title}}</h1>

    {{$slot}}
</body>
</html>