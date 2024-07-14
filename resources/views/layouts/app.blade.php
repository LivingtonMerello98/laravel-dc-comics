<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>@yield('page-title')</title>
</head>
<body>
    @include('shared.header')
    <main>
        @yield('hero')

        @yield('all_comics')

        @yield('form')

        @yield('details')

    </main>
    @include('shared.items')
    @include('shared.footer')
    @include('shared.bottom-footer')
    <script src="https://kit.fontawesome.com/7711c3f1fc.js" crossorigin="anonymous"></script>
</body>
</html>