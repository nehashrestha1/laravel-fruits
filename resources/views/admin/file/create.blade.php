@extends('admin.layouts.main')

@section('content')

            <!-- Menu -->
                <!-- / Menu -->

                <!-- Layout container -->
               
                    <!-- Navbar -->
                    <!-- / Navbar -->

                    <!-- Content wrapper -->
                  
                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <h4 class="fw-bold py-3 mb-4">
                                <span class="text-muted fw-light">File</span> Add file data
                            </h4>

                            <!-- Basic Layout & Basic with Icons -->
                            <div class="row">
                                <!-- Basic with Icons -->
                                <div class="col-xxl">
                                    <div class="card mb-4">
                                        <div class="card-body">

                                            <form class="row" method="POST" action="{{ route('file.store') }}">
                                                @csrf <!-- Protects against CSRF attacks -->

                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="col-form-label" for="Name">Name</label>
                                                    <input type="text" name="Name" class="form-control"
                                                        id="Name" placeholder="Enter site key" required>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="col-form-label" for="path">path</label>
                                                    <input type="text" name="path" class="form-control"
                                                        id="path" placeholder="Enter site value" required>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="form-label" for="status">Status</label>
                                                    <select name="status" class="form-control" id="status" required>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-primary">Create file
                                                        Section</button>
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
