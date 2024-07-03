<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <link href="{{mix('/resources/css/app.css')}}" rel="stylesheet">
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="bg-gray-100 dark:bg-zinc-800 h-[3000px] rtl ">
       <div>

            <livewire:home.header>
            <livewire:home.prodact>
                <livewire:home.categori-both>
                    <livewire:home.categori>
                        <livewire:home.profitable>
            {{-- <livewire:home.sectoin> --}}
       </div>



       @livewireScripts
    </body>
</html>
