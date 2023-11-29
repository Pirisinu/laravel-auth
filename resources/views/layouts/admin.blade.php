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
<body >
    @include('admin.partials.header')

    <div class="main-wrapper overflow-hidden d-flex">
        @include('admin.partials.aside')
        <div class="overflow-x-scroll w-100">
            @yield('content')
        </div>
    </div>
</body>
</html>
