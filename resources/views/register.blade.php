<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Registro</title>
</head>
<body>
    <div class="auth-container">
        <h2 class="title">Registro</h2>
        <form action="/register" method="POST">
            @csrf
            <label for="name" class="input-label">Nombre</label>
            <input type="text" name="name" spellcheck="false" class="input-field">
            <label for="email" class="input-label">Email</label>
            <input type="email" name="email" spellcheck="false" class="input-field">
            <label for="password" class="input-label">Contraseña</label>
            <input type="password" name="password" class="input-field">
            <button type="submit" class="primary-button" id="register-button">Registrarse</button>
            <p class="auth-text">¿Ya tienes una cuenta? <a class="auth-link" href="/login">Inicia sesión</a></p>
        </form>
    </div>
</body>
</html>