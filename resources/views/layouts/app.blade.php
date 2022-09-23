<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>

    <title>{{ config('app.name', 'Code-Play') }}</title>

    <script src="https://kit.fontawesome.com/2b94009ee2.js" crossorigin="anonymous"></script>      
    @livewireStyles
</head>

<body>
    <div class="min-h-screen bg-gray-100">
        @include('components.navigation')

        <main>
            @yield('content')
            @livewireScripts
        </main>
    </div>

</body>

</html>
