<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PWEB - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .min-h-80 {
            min-height: 80vh;
        }
    </style>
</head>
<body class="bg-gray-100">
    @include('components.navbar')

    <main class="container mx-auto py-4 min-h-80">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
