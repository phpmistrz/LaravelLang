<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Multi Language</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="h-screen">
    <x-nav />
    <main class="max-w-screen-lg mx-auto pt-72 flex flex-col items-center text-center gap-12 h-full">

        {{ $slot }}

        <h2 class="text-xl">{{__('shared.subtitle')}}</h2>
        <p>{{__('shared.text')}}</p>
        </main>
    <x-footer/>
</body>

</html>
