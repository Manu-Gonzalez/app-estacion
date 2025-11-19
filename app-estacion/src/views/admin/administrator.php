<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrador - App Estación</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body class="gradient-bg min-h-screen">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-12 relative">
            <h1 class="text-white text-3xl md:text-4xl font-bold text-shadow">Panel Administrador</h1>
            <div class="absolute top-0 right-0">
                <a href="admin-logout" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    <span class="hidden sm:inline">Cerrar Sesión</span>
                </a>
            </div>
        </header>
        
        <main class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <a href="map" class="inline-flex items-center bg-red-500 hover:bg-red-600 text-white font-bold py-4 px-8 rounded-full text-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                    </svg>
                    Mapa de Clientes
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white bg-opacity-95 p-8 rounded-2xl text-center shadow-xl">
                    <div class="text-5xl mb-6">👥</div>
                    <h3 class="text-indigo-600 text-xl font-semibold mb-6">Usuarios Registrados</h3>
                    <div class="text-5xl font-bold text-gray-800"><?= $totalUsuarios ?></div>
                </div>
                
                <div class="bg-white bg-opacity-95 p-8 rounded-2xl text-center shadow-xl">
                    <div class="text-5xl mb-6">🌍</div>
                    <h3 class="text-indigo-600 text-xl font-semibold mb-6">Clientes Únicos</h3>
                    <div class="text-5xl font-bold text-gray-800"><?= $totalClientes ?></div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>