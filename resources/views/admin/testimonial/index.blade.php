@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('testimonials.create') }}" class="btn btn-primary">Add Testimonial</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Message</th>
                <th>Name</th>
                <th>Position</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $testimonial)
                <tr>
                    <td>{{ $testimonial->id }}</td>
                    <td>{{ $testimonial->message }}</td>
                    <td>{{ $testimonial->name }}</td>
                    <td>{{ $testimonial->position }}</td>
                    <td><img src="{{ asset('storage/' . $testimonial->image) }}" alt="Image" width="100"></td>
                    <td>
                        <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
