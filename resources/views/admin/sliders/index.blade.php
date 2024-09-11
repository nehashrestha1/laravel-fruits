@extends('admin.layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sliders /</span> Manage Sliders</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">
            <a class="btn btn-primary btn-sm" href="{{ route('sliders.create') }}" role="button">Add Slider</a>
        </h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($sliders as $i => $slider)
                        @php
                            $statusBadgeClass = $slider->status ? 'bg-label-primary' : 'bg-label-warning';
                            $statusText = $slider->status ? 'Active' : 'Inactive';
                        @endphp
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $slider->category->title }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $slider->image) }}" alt="Slider Image" class="rounded-circle" width="50" height="50">
                            </td>
                            <td><span class="badge {{ $statusBadgeClass }} me-1">{{ $statusText }}</span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('sliders.edit', $slider->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>
@endsection
