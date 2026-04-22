<x-app-layout>
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->content }}</p>

    <p><strong>Status:</strong> {{ $post->status }}</p>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('status.update', $post) }}" method="post">
        @csrf
        @method('PUT')

         Status: <select name="subject" id="subject">
            <option value="draft" selected="selected">Draft</option>
            <option value="publish" selected="selected">Published</option>
            <option value="archive" selected="selected">Archived</option>
            </select>

        <!-- <label for="status">Status</label>
        <input type="text" id="status" name="status" value="{{ old('status', $post->status) }}" placeholder="Enter status"> -->

        <!-- <input type="submit" value="Update status"> -->
    </form>
</x-app-layout>