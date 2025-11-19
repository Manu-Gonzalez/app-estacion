<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="gradient-bg min-h-screen">
    <div class="container mx-auto px-4 py-8 max-w-7xl">
        <header class="text-center mb-8 relative">
            <h1 class="text-white text-3xl md:text-4xl font-bold text-shadow"><?= $title ?></h1>
            <a href="panel" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-20 hover:bg-opacity-30 text-white px-4 py-2 rounded-full transition-all duration-300 flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                <span class="hidden sm:inline">Volver al Panel</span>
            </a>
        </header>
        
        <main>
            <div id="loading" class="text-center text-white text-xl py-16">
                <div class="inline-flex items-center">
                    <svg class="animate-spin -ml-1 mr-3 h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Cargando datos de la estación...
                </div>
            </div>
            
            <div id="estacion-detalle" class="bg-white bg-opacity-95 p-6 md:p-10 rounded-2xl shadow-xl" style="display: none;">
                <div class="text-center mb-8">
                    <h2 id="apodo" class="text-indigo-600 text-2xl md:text-3xl font-bold mb-4"></h2>
                    <p id="ubicacion" class="text-gray-600 text-lg mb-4 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </p>
                    <div class="bg-gray-50 p-4 rounded-lg border-l-4 border-indigo-600 mb-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <strong>Chip ID:</strong> <span id="chipid" class="ml-2"><?= $chipid ?></span>
                        </div>
                    </div>
                    <div class="text-gray-500 italic flex items-center justify-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <small>Última actualización: <span id="last-update"></span></small>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-xl shadow-md text-center">
                        <div class="flex items-center justify-center mb-4">
                            <div class="text-3xl mr-2">🌡️</div>
                            <h3 class="text-indigo-600 text-lg font-semibold">Temperatura</h3>
                        </div>
                        <canvas id="tempChart" class="mb-4" style="max-height: 200px;"></canvas>
                        <div id="tempValue" class="text-2xl font-bold text-gray-800 bg-gray-50 py-3 px-4 rounded-lg">--°C</div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-md text-center">
                        <div class="flex items-center justify-center mb-4">
                            <div class="text-3xl mr-2">💧</div>
                            <h3 class="text-indigo-600 text-lg font-semibold">Humedad</h3>
                        </div>
                        <canvas id="humChart" class="mb-4" style="max-height: 200px;"></canvas>
                        <div id="humValue" class="text-2xl font-bold text-gray-800 bg-gray-50 py-3 px-4 rounded-lg">--%</div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-md text-center">
                        <div class="flex items-center justify-center mb-4">
                            <div class="text-3xl mr-2">💨</div>
                            <h3 class="text-indigo-600 text-lg font-semibold">Viento</h3>
                        </div>
                        <canvas id="windChart" class="mb-4" style="max-height: 200px;"></canvas>
                        <div id="windValue" class="text-2xl font-bold text-gray-800 bg-gray-50 py-3 px-4 rounded-lg">-- km/h</div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-md text-center">
                        <div class="flex items-center justify-center mb-4">
                            <div class="text-3xl mr-2">🌪️</div>
                            <h3 class="text-indigo-600 text-lg font-semibold">Presión Atmosférica</h3>
                        </div>
                        <canvas id="pressChart" class="mb-4" style="max-height: 200px;"></canvas>
                        <div id="pressValue" class="text-2xl font-bold text-gray-800 bg-gray-50 py-3 px-4 rounded-lg">-- hPa</div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-md text-center md:col-span-2 lg:col-span-1">
                        <div class="flex items-center justify-center mb-4">
                            <div class="text-3xl mr-2">🔥</div>
                            <h3 class="text-indigo-600 text-lg font-semibold">Riesgo de Incendio</h3>
                        </div>
                        <canvas id="fireChart" class="mb-4" style="max-height: 200px;"></canvas>
                        <div id="fireValue" class="text-2xl font-bold text-gray-800 bg-gray-50 py-3 px-4 rounded-lg">--</div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        const chipid = '<?= $chipid ?>';
    </script>
    <script src="public/js/detalle.js"></script>
</body>
</html>