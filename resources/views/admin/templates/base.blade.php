<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- stylesheet bs 5.2 --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- script per bs 5.2 --}}
    <script defer src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>
<body>
    @include('admin.partials.header')

    <main class="container">
        @yield('mainPage')
    </main>

</body>
</html>
