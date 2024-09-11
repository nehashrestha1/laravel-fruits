@extends('admin.layouts.main')

@section('content')
    <h1>Edit File</h1>

    <form action="{{ route('files.update', $file->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $file->name }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
