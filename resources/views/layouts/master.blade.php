<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MyBlog')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
    <!-- Navigation Bar -->
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">MyBlog</a>
            <div class="space-x-4">
                <a href="/" class="hover:text-gray-200">Inicio</a>
                <a href="/category" class="hover:text-gray-200">Categorías</a>
                <a href="/category/create" class="hover:text-gray-200">Crear Post</a>
                <a href="/login" class="hover:text-gray-200">Login</a>
                <a href="/logout" class="hover:text-gray-200">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container mx-auto mt-6 p-4 bg-white rounded shadow">
        @yield('content')
    </div>
</body>

</html>
