<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <main>{{ $slot }}</main>
    <script src="{{ asset('js/rich.js') }}"></script>
    <nav>
    <a href="{{ route('index') }}">Posts</a>

    <a href="{{ route('contact_index') }}">Contacts</a>

    <a href="{{ route('create') }}">Create Post</a>

    <a href="{{ route('contact_create') }}">Create Contact</a>

    <a href="{{ route('about') }}">About</a>
</nav>
</body>
</html>

