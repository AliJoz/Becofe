<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{ asset('home/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('home/css/materialdesignicons.css') }}">
<link rel="stylesheet" href="{{ asset('home/css/materialdesignicons.css.map') }}">

<link rel="stylesheet" href="{{ asset('home/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('home/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('home/css/style.css') }}">


{{-- @vite([
    'resources/css/app.css',
    'resources/js/app.js'
]) --}}
@yield('styles')
<livewire:styles />
