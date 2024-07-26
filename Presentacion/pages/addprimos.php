<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Número Primo</title>
    <!-- Incluye Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-black text-white p-4 flex justify-between items-center relative">
        <nav class="flex items-center space-x-4">
            <a href="index.php" class="hover:text-yellow-500">INICIO</a>
            <a href="listprimos.php" class="hover:text-yellow-500">LISTAR PRIMOS</a>
        </nav>
        <div class="text-2xl font-bold text-center">Agregar Número Primo</div>
    </header>

    <!-- Main Content -->
    <main class="bg-gray-100 p-8 flex-grow">
        <div class="container mx-auto max-w-xl py-8">
            <h1 class="text-2xl font-bold mb-4">Agregar Número Primo</h1>

            <!-- Formulario para agregar número primo -->
            <form id="primoForm" action="procesar_primos.php" method="POST" class="bg-white shadow-md rounded p-6">
                <div class="mb-4">
                    <label for="numero" class="block text-gray-700 text-sm font-bold mb-2">Número:</label>
                    <input type="number" id="numero" name="numero" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <button type="submit" class="bg-yellow-600 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Agregar</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white text-center p-4">
        <p>&copy; 2024 Tu Proyecto. Todos los Derechos Reservados.</p>
    </footer>
    <script src="../Presentacion/pages/script/main.js"></script>
</body>
</html>
