
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesióneeeeeee</title>

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
        
        .login-container {
            background-color:rgb(223, 52, 52);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(41, 59, 46, 0.15);
            max-width: 400px;
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
        
        .form-control:focus {
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
        
        .alert-danger {
            background-color: #fff0f0;
            border-color: #ffcccc;
            color: #d63031;
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
        
        .login-icon {
            text-align: center;
            margin-bottom: 1rem;
        }
        
        .login-icon i {
            font-size: 2.5rem;
            color: var(--color-secondary);
            background: var(--color-light);
            width: 70px;
            height: 70px;
            line-height: 70px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#85DB95" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </div>
        <h1 class="text-center mb-4">Iniciar sesión</h1>
        <form method="POST" action="/login">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger mb-3" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    Correo o contraseña incorrectos.
                </div>
            @endif

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text" style="background-color: #9DE0B0; border-color: #9DE0B0;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#293B2E" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                        </svg>
                    </span>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="usuario@ejemplo.com">
                </div>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <span class="input-group-text" style="background-color: #9DE0B0; border-color: #9DE0B0;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#293B2E" class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                        </svg>
                    </span>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="••••••••">
                </div>
            </div>
            <div class="d-grid gap-2"> {{-- Para que el botón ocupe todo el ancho --}}
                <button type="submit" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right me-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                    Iniciar sesión
                </button>
            </div>
        </form>
        <p class="text-center mt-4">
            <a href="/register">¿No tienes una cuenta? Regístrate</a>
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>