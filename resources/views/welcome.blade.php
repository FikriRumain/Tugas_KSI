<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>
<body class="font-sans antialiased bg-gradient-to-r from-purple-600 via-indigo-500 to-blue-500 dark:bg-gradient-to-r dark:from-gray-800 dark:via-gray-700 dark:to-gray-600">
    <div class="relative min-h-screen flex items-center justify-center px-6 py-12 sm:px-12 lg:px-24">
        <img id="background" class="absolute inset-0 w-full h-full object-cover opacity-30 z-0"  alt="Laravel Background">
        
        <div class="relative w-full max-w-4xl bg-white/70 dark:bg-black/70 p-10 rounded-xl shadow-2xl z-10">
            <header class="text-center mb-8">
                <h1 class="text-4xl font-extrabold text-black dark:text-white">Welcome Sayang Ku</h1>
                <p class="text-lg text-gray-500 dark:text-gray-300">Your gateway to building amazing applications</p>
            </header>

            <div class="flex justify-center space-x-6">
                @if (Route::has('login'))
                    <nav class="flex space-x-6">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-white bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded-md shadow-md transition duration-300">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-indigo-600 border border-indigo-600 hover:bg-indigo-600 hover:text-white px-6 py-3 rounded-md shadow-md transition duration-300">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-white bg-indigo-600 hover:bg-indigo-700 px-6 py-3 rounded-md shadow-md transition duration-300">Register</a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>

            <footer class="mt-12 text-center text-sm text-gray-600 dark:text-white/70">
                <h3>fikri/Developer</h3>
            </footer>
        </div>
    </div>
</body>
</html>
