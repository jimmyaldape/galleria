<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Galleria</title>
</head>
<body class="min-h-screen antialiased">
<div class="flex flex-col min-h-screen">

    <header class="block w-full z-50">
        <div class="max-w-6xl p-4 mx-auto text-lg">
            <div class="flex justify-between flex-wrap">
                <a class="logo mb-5" href="/" title="Galleria App">
                    Galleria Logo
                </a>

            </div>
        </div>
    </header>

    <main class="flex flex-grow h-full max-w-6xl px-6 py-12 mx-auto @yield('offset')">
        {{$slot}}
    </main>

    <footer class="block flex flex-col justify-center p-8 text-white">
        <div class="text-xs text-gray-600 text-center">&copy {{ date('Y') }} Galleria. Jimmy Aldape. All rights reserved.</div>
    </footer>

</div>
</body>
</html>
