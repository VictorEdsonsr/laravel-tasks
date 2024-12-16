<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Tasks</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style type="text/tailwindcss">
        .link{
            @apply border rounded border-black py-2 px-3 hover:bg-black hover:text-white transition-all shadow-sm
        }

        .btn {
            @apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-500 transition-all hover:text-slate-100
        }
    </style>
</head>
<body class="mx-auto my-10 max-w-lg" >


    <h1 class="text-2xl font-bold mb-4 text-white bg-black w-100 text-center">@yield('title')</h1>

    <div>
        @yield('flash-message')
    </div>

    @if (session()->has('success'))
        <div class="success">{{session('success')}}</div>
    @endif

    <main>
        @yield('content')
    </main>

</body>
</html>
