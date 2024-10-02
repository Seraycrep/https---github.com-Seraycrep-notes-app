<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Iniciar sesión</title>
</head>
<body>
    <div class="auth-container">
        <h2 class="title">Iniciar sesión</h2>
        <form action="/login" method="POST">
            @csrf
            <label for="loginemail" class="input-label">Email</label>
            <input type="email" name="loginemail" spellcheck="false" class="input-field">
            <label for="loginpassword" class="input-label">Contraseña</label>
            <input type="password" name="loginpassword" spellcheck="false" class="input-field">
            <button type="submit" class="primary-button" id="login-button">Iniciar sesión</button>
            <p class="auth-text">¿No tienes una cuenta? <a class="auth-link" href="/register">Regístrate</a></p>
        </form>
    </div>
</body>
</html>