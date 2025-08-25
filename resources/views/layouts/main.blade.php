<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Only Cars')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.12.0/cdn.min.js" defer></script>
</head>
<body class="flex flex-col justify-beetwen min-h-sreen">
    @include('layouts.navbar')
    <div>
        @yield('content')
    </div>
     @include('layouts.footer')
</body>
</html>