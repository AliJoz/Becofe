<!DOCTYPE html>
<html lang="fa">

<head>
    @include('livewire.home.layouts.head')
    <title>@yield('title') | بی کافه</title>
    
</head>

<body>
    {{ $slot }}
    @include('livewire.home.layouts.scripts')
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'

    ])
</html>
