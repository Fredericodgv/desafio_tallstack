<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>{{ config('app.name', 'Code-Play') }}</title>
</head>

<body>
    @extends('layouts.navigation')
    
    <h1 class="text-3xl font-bold underline">
        Hello World
    </h1>
</body>

</html>
