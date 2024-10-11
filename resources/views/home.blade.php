<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Inicio</title>
</head>
<body>
    <div class="header">
        <h1 class="header-title">Bienvenido {{ Str::ucfirst(auth()->user()->name) }}</h1>
        <form action="/logout" method="POST">
            @csrf
            <button class="primary-button" id="logout-button">Logout</button>
        </form>
    </div>

    <div class="home-container" id="create-post-container">
        <h2>Crear un nuevo post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <label for="title" class="input-label">Título</label>
            <input type="text" name="title" id="title" class="input-field">
            <label for="body" class="input-label">Contenido</label>
            <textarea name="body" id="body" class="input-field"></textarea>
            <button type="submit" class="primary-button" id="create-post-button">Crear post</button>
        </form>
    </div>

    <div class="home-container" id="posts-container">
        <h2 id="posts-title">Tus posts</h2>
        @foreach ($posts as $post)
            <div class="post">
                <h3 class="post-title">{{ $post->title }}</h3>
                <p class="post-author">Por: {{ $post->user->name }}</p>
                <p class="post-body">{{ $post->body }}</p>
                <div class="post-buttons">
                    <a href="/edit-post/{{ $post->id }}" class="secondary-button" id="edit-post-button">Editar</a>
                    <form style="margin-bottom: 0px" action="/delete-post/{{ $post->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="danger-button" id="delete-post-button">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>