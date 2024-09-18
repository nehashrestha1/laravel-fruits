
@extends('admin.layouts.main')

@section('content')
    <section>
        <div class="container py-5">
            <div class="title pb-3">
                <a class="btn btn-primary btn-sm" href="{{ route('contact.create') }}" role="button">Add Fact</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contact->Name }}</td>
                                <td>{{ $contact->Email }}</td>
                                <td>{{ $contact->Message }}</td>
                                <td>{{ $contact->status }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('contacts.edit', $contact->id) }}"
                                        role="button">Edit</a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $contact->id }}">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal{{ $contact->id }}" tabindex="-1"
                                        aria-labelledby="deleteModalLabel{{ $contact->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel{{ $contact->id }}">Do you
                                                        want to delete this data?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    This action cannot be undone. Are you sure you want to delete this contact?
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
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

