<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <form method="POST" action="/login">
        @csrf

        @if ($errors->any())
            <div style="color: red;">
                Correo o contraseña incorrectos.
            </div>
        @endif

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Iniciar sesión</button>
    </form>
    <a href="/register">¿No tienes una cuenta? Regístrate</a>
</body>
</html>