<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - App Estación</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="bg-white bg-opacity-95 p-8 rounded-2xl shadow-xl">
            <div class="text-center mb-8">
                <div class="text-4xl mb-4">👤</div>
                <h1 class="text-indigo-600 text-3xl font-bold">Registrarse</h1>
            </div>
            
            <?php if (isset($error)): ?>
                <div class="bg-red-500 text-white p-4 rounded-lg mb-6 text-center flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <?= $error ?>
                </div>
            <?php endif; ?>
            
            <?php if (isset($success)): ?>
                <div class="bg-green-500 text-white p-4 rounded-lg mb-6 text-center flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <?= $success ?>
                </div>
            <?php endif; ?>
            
            <form method="POST" class="space-y-6">
                <div>
                    <label for="nombres" class="block text-gray-700 font-semibold mb-2 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        Nombres:
                    </label>
                    <input type="text" id="nombres" name="nombres" required 
                           class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-indigo-600 focus:outline-none transition-colors">
                </div>
                
                <div>
                    <label for="email" class="block text-gray-700 font-semibold mb-2 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                        </svg>
                        Email:
                    </label>
                    <input type="email" id="email" name="email" required 
                           class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-indigo-600 focus:outline-none transition-colors">
                </div>
                
                <div>
                    <label for="password" class="block text-gray-700 font-semibold mb-2 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        Contraseña:
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                    Registrarse
                </button>
            </form>
            
            <div class="text-center mt-6">
                <a href="login" class="text-indigo-600 hover:text-indigo-800 transition-colors flex items-center justify-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                    </svg>
                    ¿Ya tienes cuenta? Iniciar sesión
                </a>
            </div>
        </div>
    </div>
</body>
</html>