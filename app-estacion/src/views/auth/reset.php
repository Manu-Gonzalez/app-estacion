<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña - App Estación</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="bg-white bg-opacity-95 p-8 rounded-2xl shadow-xl">
            <div class="text-center mb-8">
                <div class="text-4xl mb-4">🔄</div>
                <h1 class="text-indigo-600 text-3xl font-bold">Restablecer Contraseña</h1>
                <p class="text-gray-600 mt-2">Ingresa tu nueva contraseña</p>
            </div>
            
            <?php if (isset($error)): ?>
                <div class="bg-red-500 text-white p-4 rounded-lg mb-6 text-center flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <?= $error ?>
                </div>
            <?php endif; ?>
            
            <form method="POST" class="space-y-6">
                <div>
                    <label for="password" class="block text-gray-700 font-semibold mb-2 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        Nueva Contraseña:
                    </label>
                    <input type="password" id="password" name="password" required 
                           class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-indigo-600 focus:outline-none transition-colors">
                </div>
                
                <div>
                    <label for="confirm_password" class="block text-gray-700 font-semibold mb-2 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.586-3H4a1 1 0 00-.707.293l-3 3a1 1 0 000 1.414l3 3A1 1 0 004 17h16.586A2 2 0 0022 15V7a2 2 0 00-1.414-1.707z"></path>
                        </svg>
                        Repetir Contraseña:
                    </label>
                    <input type="password" id="confirm_password" name="confirm_password" required 
                           class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-indigo-600 focus:outline-none transition-colors">
                </div>
                
                <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-6 rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    Restablecer Contraseña
                </button>
            </form>
        </div>
    </div>
</body>
</html>