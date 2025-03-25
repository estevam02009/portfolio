<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles / Scripts -->
    @vite('resources/css/app.css')

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-gray-100">
    <h1 class="text-3xl text-red-500 font-bold underline">
        Olá Mundo! Laravel
    </h1>
    <p class="font-semibold text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus obcaecati sapiente, inventore excepturi sequi ut culpa alias asperiores facilis amet sint praesentium voluptatem itaque nisi, molestiae assumenda sed, et minus.
    </p>
</body>

</html>
