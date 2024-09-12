@extends('admin.layouts.main')

@section('content')

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->
                <!-- / Menu -->

                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Navbar -->
                    <!-- / Navbar -->

                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <h4 class="fw-bold py-3 mb-4">
                                <span class="text-muted fw-light">Files</span> Add setting data
                            </h4>

                            <!-- Basic Layout & Basic with Icons -->
                            <div class="row">
                                <!-- Basic with Icons -->
                                <div class="col-xxl">
                                    <div class="card mb-4">
                                        <div class="card-body">

                                            <form class="row" method="POST" action="{{ route('fileg.update', $Files->id) }}">
                                                @csrf <!-- Protects against CSRF attacks -->
@method('PUT')


                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="col-form-label" for="name">Name</label>
                                                    <input type="text" name="name" class="form-control"
                                                        id="name" placeholder="Enter site value" value="{{$Files->name}}" required>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="col-form-label" for="path">path</label>
                                                    <input type="text" name="path" class="form-control"
                                                        id="path" placeholder="Enter site value" value="{{$Files->path}}" required>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="form-label" for="status">Status</label>
                                                    <select name="status" class="form-control" id="status" required>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-primary">Update Files
                                                        </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Content -->
                    </div>
                    <!-- / Content wrapper -->
                </div>
                <!-- / Layout container -->
            </div>
            <!-- / Layout wrapper -->
        </div>
    </body>
@endsection
