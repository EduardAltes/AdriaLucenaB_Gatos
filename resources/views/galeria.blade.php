<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Gatos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-6">🐱 Galería de Gatos 🐱</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($images as $image)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://cataas.com/cat/{{ $image->_id }}" 
                         alt="Gato" 
                         class="w-full h-60 object-cover">
                    <div class="p-4">
                        <p class="text-gray-700 text-sm">Tags: {{ implode(', ', json_decode($image->tags)) }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Botones de paginación -->
        <div class="mt-6 flex justify-center">
            {{ $images->links('pagination::tailwind') }}
        </div>
    </div>

</body>
</html>
