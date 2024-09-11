@extends('admin.layouts.main')
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">hero</span> Add Hero Section</h4>

        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">
                    <a class="btn btn-primary btn-sm" href="{{ route('hero.create') }}" role="button">Add Fact</a>
                </h5>
                <small class="text-muted float-end">Create a new hero section</small>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <form class="row" method="POST" action="{{ route('hero.store') }}">
                    @csrf
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label class="col-form-label" for="top_title">Top Title</label>
                        <input type="text" name="top_title" class="form-control" id="top_title" placeholder="Enter top title" required>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label class="col-form-label" for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" required>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label class="form-label" for="status">Status</label>
                        <select name="status" class="form-control" id="status" required>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <div class="col-sm-12">
                        <button type="submit" name="save" class="btn btn-primary">Create Hero Section</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

@endsection
