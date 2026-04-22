<x-app-layout>
    <h1>Create post</h1>
<form action="{{ route('contacts.store') }}" method="POST">
    @csrf

    <label for="name">name</label>
    <input type="text" name="name" id="name">

    <label for="email">email</label>
    <input type="email" name="email" id="email">

    <label for="message">message</label>
    <textarea name="message" id="message"></textarea>

    <button type="submit">Contact</button>
</form>
</x-app-layout>