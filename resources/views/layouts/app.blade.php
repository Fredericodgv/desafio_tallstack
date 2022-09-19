<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>

    <title>{{ config('app.name', 'Code-Play') }}</title>
</head>

<body>
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <header class="bg-blue-200 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ $title ?? 'Code-Play' }}
                </h2>
            </div>
        </header>

        <main>
            
        </main>
    </div>
</body>

</html>
