<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Configurar color personalizado (rojo sangre) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        sangre: '#8B0000', // rojo sangre
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
        <h2 class="text-2xl font-bold text-sangre text-center mb-6">Iniciar Sesión</h2>

        @if(session('error'))
            <div class="mb-4 text-sm text-red-600">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Correo electrónico</label>
                <input type="email" id="email" name="email" required autofocus
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sangre">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Contraseña</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sangre">
            </div>

            <button type="submit"
                class="w-full bg-sangre text-white font-semibold py-2 px-4 rounded-lg hover:bg-red-900 transition-colors">
                Entrar
            </button>
        </form>
    </div>

</body>
</html>