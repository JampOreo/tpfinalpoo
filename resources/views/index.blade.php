<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido, {{ $user->nombre }}</h1>
    <h2>Estadísticas</h2>
    <ul>
        <li>Posts: {{ $postsCount }}</li>
        <li>Comentarios: {{ $commentsCount }}</li>
        <li>Accesos: {{ $accessesCount }}</li>
    </ul>
</body>
</html>