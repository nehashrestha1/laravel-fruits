@extends('admin.layouts.main')

@section('content')
    <h1>Files</h1>
    <a href="{{ route('files.create') }}">Create New File</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach($files as $file)
            <tr>
                <td>{{ $file->id }}</td>
                <td>{{ $file->name }}</td>
                <td>
                    <a href="{{ route('files.edit', $file->id) }}">Edit</a>
                    <form action="{{ route('files.destroy', $file->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
