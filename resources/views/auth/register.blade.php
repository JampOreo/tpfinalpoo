<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        :root {
            --color-primary: #567A60;
            --color-secondary: #85DB95;
            --color-light: #AFFAC4;
            --color-dark: #293B2E;
            --color-accent: #9DE0B0;
        }
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: var(--color-light);
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .register-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(41, 59, 46, 0.15);
            max-width: 500px;
            width: 90%;
            border-top: 4px solid var(--color-primary);
        }
        
        h1 {
            color: var(--color-dark);
            font-weight: 600;
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            color: var(--color-primary);
            font-weight: 500;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--color-accent);
            box-shadow: 0 0 0 0.25rem rgba(157, 224, 176, 0.25);
        }
        
        .btn-primary {
            background-color: var(--color-primary);
            border-color: var(--color-primary);
            padding: 10px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover, .btn-primary:focus {
            background-color: var(--color-dark);
            border-color: var(--color-dark);
            transform: translateY(-2px);
        }
        
        a {
            color: var(--color-primary);
            text-decoration: none;
            transition: color 0.2s;
        }
        
        a:hover {
            color: var(--color-dark);
            text-decoration: underline;
        }
        
        .register-icon {
            text-align: center;
            margin-bottom: 1rem;
        }
        
        .register-icon svg {
            background-color: var(--color-light);
            padding: 12px;
            border-radius: 50%;
        }
        
        .input-group-text {
            background-color: var(--color-accent);
            border-color: var(--color-accent);
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#85DB95" class="bi bi-person-plus" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
        </div>
        <h1 class="text-center mb-4">Registrarse</h1>
        <form method="POST" action="/register">
            @csrf
            
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#293B2E" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                    </span>
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Tu nombre completo">
                </div>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#293B2E" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                        </svg>
                    </span>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="usuario@ejemplo.com">
                </div>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#293B2E" class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                        </svg>
                    </span>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="••••••••">
                </div>
                <div class="form-text text-muted" style="color: var(--color-primary) !important; font-size: 0.8rem;">
                    La contraseña debe tener al menos 8 caracteres
                </div>
            </div>
            
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#293B2E" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                    </span>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="••••••••">
                </div>
            </div>
            
            <div class="mb-4">
                <label for="rol" class="form-label">Rol (opcional)</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#293B2E" class="bi bi-person-badge" viewBox="0 0 16 16">
                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                        </svg>
                    </span>
                    <select class="form-select" id="rol" name="rol">
                        <option value="usuario" selected>Usuario</option>
                        <option value="comentarista">Comentarista</option>
                        <option value="administrador">Administrador</option>
                    </select>
                </div>
            </div>
            
            <div class="d-grid gap-2 mb-3">
                <button type="submit" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle me-2" viewBox="0 0 16 16">
                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                    </svg>
                    Registrarse
                </button>
            </div>
            
            <p class="text-center">
                <a href="/login">¿Ya tienes una cuenta? Inicia sesión</a>
            </p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>