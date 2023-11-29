<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Side</title>
    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>
<body>
    @include('admin.partials.header')
    @yield('content')
</body>
</html>