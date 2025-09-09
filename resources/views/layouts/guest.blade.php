<!-- resources/views/layouts/guest.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-yellow-400 to-blue-600 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md p-6 bg-white rounded-2xl shadow-2xl">
        @yield('content')
    </div>
</body>
</html>
