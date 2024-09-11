@extends('admin.layouts.main')

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- / Sidebar -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            @include('layouts.navbar')
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light">Sliders/</span> Add Slider
                    </h4>

                    <!-- Form -->
                    <div class="row">
                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">
                                        <a class="btn btn-primary btn-sm" href="{{ route('sliders.index') }}" role="button">Manage Slider</a>
                                    </h5>
                                    <small class="text-muted float-end">Slider Input</small>
                                </div>
                                <div class="card-body">

                                    @if (session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    @if (session('error'))
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    <form class="row" method="POST" action="{{ route('sliders.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                            <label for="category_id" class="col-form-label">Category</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i class="bx bx-category"></i></span>
                                                    <select class="form-select" name="category_id" required>
                                                        <option selected disabled>Select category</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                            <label for="description" class="col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i class="bx bx-message-square-dots"></i></span>
                                                    <textarea name="description" class="form-control" placeholder="Enter description" required></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                            <label for="image" class="col-form-label">Image</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i class="bx bx-image"></i></span>
                                                    <input type="file" name="image" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select name="status" class="form-control" required>
                                                    <option value="0">Pending</option>
                                                    <option value="1">In Progress</option>
                                                    <option value="2">Completed</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- / Content -->

                @include('layouts.footer')
            </div>
        </div>
    </div>
</div>
@endsection
