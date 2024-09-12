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
                                <span class="text-muted fw-light">Settings</span> Add setting data
                            </h4>

                            <!-- Basic Layout & Basic with Icons -->
                            <div class="row">
                                <!-- Basic with Icons -->
                                <div class="col-xxl">
                                    <div class="card mb-4">
                                        <div class="card-body">

                                            <form class="row" method="POST" action="{{ route('setting.store') }}">
                                                @csrf <!-- Protects against CSRF attacks -->

                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="col-form-label" for="site_key">Site Key</label>
                                                    <input type="text" name="site_key" class="form-control"
                                                        id="site_key" placeholder="Enter site key" required>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="col-form-label" for="site_value">Site Value</label>
                                                    <input type="text" name="site_value" class="form-control"
                                                        id="site_value" placeholder="Enter site value" required>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="form-label" for="status">Status</label>
                                                    <select name="status" class="form-control" id="status" required>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-primary">Create Settings
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
