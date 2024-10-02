<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="/edit-post/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        <label for="body">Body</label>
        <textarea name="body" id="body">{{ $post->body }}</textarea>
        <button type="submit">Update Post</button>
    </form>
</body>
</html>