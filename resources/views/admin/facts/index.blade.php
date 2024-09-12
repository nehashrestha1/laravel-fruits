@extends('admin.layouts.main')

@section('content')
    <section>
        <div class="container py-5">
            <div class="title pb-3">
                <a class="btn btn-primary btn-sm" href="{{ route('facts.create') }}" role="button">Add Fact</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SN</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Title</th>
                            <th scope="col">Number</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($facts as $fact)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $fact->icon }}</td>
                                <td>{{ $fact->title }}</td>
                                <td>{{ $fact->number }}</td>
                                <td>{{ $fact->status }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('facts.edit', $fact->id) }}"
                                        role="button">Edit</a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $fact->id }}">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal{{ $fact->id }}" tabindex="-1"
                                        aria-labelledby="deleteModalLabel{{ $fact->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel{{ $fact->id }}">Do you
                                                        want to delete this data?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    This action cannot be undone. Are you sure you want to delete this fact?
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('facts.destroy', $fact->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{-- {{ $facts->links() }} --}}
                </div>
            </div>
        </div>
    </section>
@endsection
