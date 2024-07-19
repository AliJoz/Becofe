@extends('livewire.home.user.register')

<head>
    @include('livewire.home.layouts.head')
    <title>@yield('title')|بی کافه </title>
</head>
<body>
    {{$slot}}
@include('livewire.home.layouts.scripts')
</body>
