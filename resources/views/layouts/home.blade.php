
<!DOCTYPE html>
<html lang="fa">

<head>
    @include('livewire.home.layouts.head')
    <title>@yield('title') | دیجی استور</title>
</head>
<body>

    <livewire:home.layouts.header>
        <livewire:home.header>
            <livewire:home.prodact>
            <livewire:home.categori-both>
              <livewire:home.categori>
              <livewire:home.profitable>
              <livewire:home.matlab>


    {{ $slot }}
    <livewire:home.layouts.footer>
    @include('livewire.home.layouts.scripts')
</body>
</html>
