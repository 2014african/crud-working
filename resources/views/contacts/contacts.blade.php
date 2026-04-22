<x-app-layout>
    <h1>All contacts</h1>

    <a href="{{ route('contact_index') }}">Contact us</a>

    <form action="{{ route('contacts.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <textarea name="message" placeholder="Message"></textarea>

    <button type="submit">Submit</button>
</form>
</x-app-layout>