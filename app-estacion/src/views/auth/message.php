<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> - App Estación</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="bg-white bg-opacity-95 p-8 rounded-2xl shadow-xl text-center">
            <div class="text-4xl mb-6">💬</div>
            <h1 class="text-indigo-600 text-3xl font-bold mb-6"><?= $title ?></h1>
            <div class="bg-gray-50 p-6 rounded-lg mb-6 text-gray-700 leading-relaxed">
                <?= $message ?>
            </div>
            <a href="login" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 transition-colors font-semibold">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Volver al login
            </a>
        </div>
    </div>
</body>
</html>