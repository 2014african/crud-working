<x-app-layout>
    <h1>All posts</h1>

    <a href="{{ route('create') }}">Create Post</a>

    <ul>
        @foreach($posts as $post)
            <li>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>

                <div>
                    <a href="/posts/{{ $post->id }}">Open</a>
                    <a href="/posts/{{ $post->id }}/edit">Edit</a>

                    <form action="/posts/{{ $post->id }}/destroy" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>