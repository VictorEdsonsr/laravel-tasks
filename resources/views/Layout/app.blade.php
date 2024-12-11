<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Tasks</title>
    @yield('styles')
    <style>
        .success{
            color: green;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
    @if (session()->has('success'))
        <div class="success">{{session('success')}}</div>
    @endif

    <div>
        @yield('flash-message')
    </div>
    <h1>@yield('title')</h1>
    <main>
        @yield('content')
    </main>

</body>
</html>
