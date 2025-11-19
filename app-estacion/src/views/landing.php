<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/heroicons@1.0.6/outline/index.js"></script>
</head>
<body class="gradient-bg min-h-screen">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-12">
            <h1 class="text-white text-4xl md:text-5xl font-bold text-shadow"><?= APP_NAME ?></h1>
        </header>
        
        <main class="text-center">
            <div class="hero">
                <h2 class="text-white text-2xl md:text-3xl font-semibold mb-6">Monitoreo de Estaciones Meteorológicas</h2>
                <p class="text-white text-opacity-90 text-lg md:text-xl mb-12 max-w-3xl mx-auto px-4">
                    Accede a datos en tiempo real de estaciones meteorológicas distribuidas en diferentes ubicaciones. 
                    Consulta temperatura, humedad y otros parámetros climáticos.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 my-12 px-4">
                    <div class="glass-effect p-6 md:p-8 rounded-2xl backdrop-blur-lg">
                        <div class="text-4xl mb-4">🌡️</div>
                        <h3 class="text-white text-xl font-semibold mb-4">Datos en Tiempo Real</h3>
                        <p class="text-white text-opacity-80">Información actualizada de temperatura y humedad</p>
                    </div>
                    <div class="glass-effect p-6 md:p-8 rounded-2xl backdrop-blur-lg">
                        <div class="text-4xl mb-4">📍</div>
                        <h3 class="text-white text-xl font-semibold mb-4">Múltiples Ubicaciones</h3>
                        <p class="text-white text-opacity-80">Estaciones distribuidas en diferentes zonas</p>
                    </div>
                    <div class="glass-effect p-6 md:p-8 rounded-2xl backdrop-blur-lg">
                        <div class="text-4xl mb-4">📊</div>
                        <h3 class="text-white text-xl font-semibold mb-4">Estadísticas</h3>
                        <p class="text-white text-opacity-80">Historial y análisis de datos meteorológicos</p>
                    </div>
                </div>
                
                <a href="panel" class="inline-flex items-center bg-red-500 hover:bg-red-600 text-white font-bold py-4 px-8 rounded-full text-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    Ver Panel de Estaciones
                </a>
            </div>
        </main>
    </div>
</body>
</html>