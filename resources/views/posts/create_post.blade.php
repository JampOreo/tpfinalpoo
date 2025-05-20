<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Post</title>
</head>
<body>
    <h1>Crear Nuevo Post</h1>
    <form method="POST" action="/posts">
        @csrf
        <div>
            <label for="titulo">Título</label>
            <input type="text" name="titulo" required>
        </div>
        <div>
            <label for="contenido">Contenido</label>
            <textarea name="contenido" rows="5" required></textarea>
        </div>
        <button type="submit">Publicar</button>
        <a href="/dashboard">Volver al Dashboard</a>
    </form>
</body>
</html>