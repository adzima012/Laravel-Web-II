<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <nav class="bg-gray-100 py-4">
        <div class="container mx-auto">
            <a href="{{ route('bioskop.list_cinema') }}" class="text-blue-500 hover:underline">List Cinema</a>
            <a href="{{ route('bioskop.list_film') }}" class="text-blue-500 hover:underline">List Film</a>
            <a href="{{ route('bioskop.menu_bioskop') }}" class="text-blue-500 hover:underline">Menu Bioskop</a>
        </div>
    </nav>
    <div class="container mx-auto py-4">
        @yield('content')
    </div>
</body>
</html>