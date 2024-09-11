@extends('admin.layouts.main')

@section('content')
    <h1>Create File</h1>

    <form action="{{ route('files.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <button type="submit">Create</button>
    </form>
@endsection
