<x-app-layout>
    <h1>Create post</h1>

    <form action="/posts" method="post">
        @csrf

        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Enter a sharp title">

        <label for="content">Content</label>
        <textarea name="content" id="content" placeholder="Write something worth reading">{{ old('content') }}</textarea>

        <input type="submit" value="Create post">
    </form>
</x-app-layout>


