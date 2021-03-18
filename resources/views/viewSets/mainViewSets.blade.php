<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    @if(app('env')=='local')
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    @endif
    @if(app('env')=='production')
    <link rel="stylesheet" href="{{ secure_asset('css/reset.css') }}">
    @endif

</head>
<body>
    <h1>テストです</h1>
</body>
</html>
