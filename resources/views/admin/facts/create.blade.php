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
                                <span class="text-muted fw-light">Facts</span> Add Fact
                            </h4>

                            <!-- Basic Layout & Basic with Icons -->
                            <div class="row">
                                <!-- Basic with Icons -->
                                <div class="col-xxl">
                                    <div class="card mb-4">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                            <h5 class="mb-0">Basic with Icons</h5>
                                            <small class="text-muted float-end">Merged input group</small>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('facts.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="col-form-label" for="icon">Icon</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group input-group-merge">
                                                            <span id="icon-addon" class="input-group-text"><i class="bx bx-image"></i></span>
                                                            <input type="text" name="icon" class="form-control" id="basic-icon-default-image" placeholder="Enter image URL" aria-label="Enter image URL" aria-describedby="basic-icon-default-image2" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="col-form-label" for="title">Title</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group input-group-merge">
                                                            <span id="title-addon" class="input-group-text"></span>
                                                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" aria-label="Enter title" aria-describedby="title-addon" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="col-form-label" for="number">Number</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group input-group-merge">
                                                            <span id="number-addon" class="input-group-text"></span>
                                                            <input type="number" name="number" class="form-control" id="number" placeholder="Enter number" aria-label="Enter number" aria-describedby="number-addon" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="form-label" for="status">Status</label>
                                                    <div class="col-sm-10">
                                                        <select name="status" class="form-control" id="status" required>
                                                            <option value="0">Pending</option>
                                                            <option value="1">In Progress</option>
                                                            <option value="2">Completed</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-10">
                                                    <button type="submit" name="save" class="btn btn-primary">Submit</button>
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
