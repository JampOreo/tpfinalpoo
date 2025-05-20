<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <h1>Registrarse</h1>
    <form method="POST" action="/register">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <div>
            <label for="rol">Rol (opcional)</label>
            <select name="rol">
                <option value="usuario" selected>Usuario</option>
                <option value="comentarista">Comentarista</option>
                <option value="administrador">Administrador</option>
            </select>
        </div>
        <button type="submit">Registrarse</button>
        <a href="/login">¿Ya tienes una cuenta? Inicia sesión</a>
    </form>
	@if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>