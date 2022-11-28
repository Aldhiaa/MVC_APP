<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
<header>
    <nav class="p-6">
        <div class="flex justify-between items-center">
            <h1 class="pr-6 border-r-2 text-2xl font-bold text-gray-500">PHP Laravel</h1>
            <div class="flex justify-between flex-grow">
                <div class="flex ml-6 items-center">
                    <a href="{{ route('posts.index') }}">
                        <span class="text-gray-500 text-md">Posts</span>
                    </a>
                </div>
                <div class="md:flex space-x-6 hidden">
                    <span class="text-gray-500 text-md">Sign up</span>
                    <span class="text-gray-500 text-md">Log in</span>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="container mx-auto bg-white">
    @yield('content')
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>