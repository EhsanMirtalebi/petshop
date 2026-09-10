<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'PetShop' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>
    {{--Header section--}}
    <x-layouts.header>
    </x-layouts.header>

    <main>
        {{ $slot }}
    </main>

    <x-layouts.footer>
    </x-layouts.footer>

    @livewireScripts
</body>
</html>
