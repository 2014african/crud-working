<x-app-layout>
    <h1>Edit post</h1>

    <form action="{{ route('update', $post) }}" method="post">
        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" placeholder="Enter a sharp title">

        <label for="content">Content</label>
        <textarea name="content" id="content" placeholder="Write something worth reading">{{ old('content', $post->content) }}</textarea>
        <input type="submit" value="Update">
    </form>
</x-app-layout>