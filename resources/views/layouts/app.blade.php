<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-lime-300">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut tristique et egestas quis ipsum suspendisse ultrices.
                                Elit
                                scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus.
                                Egestas
                                dui id ornare arcu odio ut sem nulla pharetra. Lacus suspendisse faucibus interdum
                                posuere
                                lorem. Turpis massa tincidunt dui ut ornare lectus sit amet est. Quis enim lobortis
                                scelerisque
                                fermentum dui faucibus in ornare quam. Egestas tellus rutrum tellus pellentesque eu
                                tincidunt
                                tortor aliquam nulla. Lectus nulla at volutpat diam. Proin sagittis nisl rhoncus mattis
                                rhoncus
                                urna neque viverra. Nunc congue nisi vitae suscipit tellus mauris. Magna eget est lorem
                                ipsum
                                dolor sit amet consectetur adipiscing. Lorem donec massa sapien faucibus et molestie ac
                                feugiat
                                sed. Sit amet luctus venenatis lectus. Vehicula ipsum a arcu cursus. Vitae tortor
                                condimentum
                                lacinia quis vel eros donec ac odio. Leo a diam sollicitudin tempor id eu nisl nunc mi.
                                Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Vestibulum
                                sed arcu
                                non odio euismod. Pharetra massa massa ultricies mi quis hendrerit dolor magna. Nunc non
                                blandit
                                massa enim nec. Eget velit aliquet sagittis id consectetur. Nibh venenatis cras sed
                                felis eget
                                velit aliquet sagittis. Dapibus ultrices in iaculis nunc sed augue lacus viverra. Eu
                                feugiat
                                pretium nibh ipsum consequat nisl vel pretium lectus. Quis vel eros donec ac. Feugiat
                                vivamus at
                                augue eget arcu dictum. Duis convallis convallis tellus id interdum velit laoreet id
                                donec.
                                Massa eget egestas purus viverra accumsan in nisl. Ullamcorper dignissim cras tincidunt
                                lobortis
                                feugiat vivamus at. Laoreet sit amet cursus sit. Odio ut sem nulla pharetra diam sit
                                amet.
                                Dignissim diam quis enim lobortis scelerisque fermentum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
