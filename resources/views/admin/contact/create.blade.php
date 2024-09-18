@extends('admin.layouts.main')

@section('content')

                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <h4 class="fw-bold py-3 mb-4">
                                <span class="text-muted fw-light">Contacts</span> Add Contacts data
                            </h4>

                            <!-- Basic Layout & Basic with Icons -->
                            <div class="row">
                                <!-- Basic with Icons -->
                                <div class="col-xxl">
                                    <div class="card mb-4">
                                        <div class="card-body">

                                            <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="col-form-label" for="basic-icon-default-fullname">Name</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group input-group-merge">
                                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                                            <input type="text" name="name" class="form-control" id="basic-icon-default-fullname" placeholder="Enter your name" aria-label="Enter your name" aria-describedby="basic-icon-default-fullname2" value="<?php echo $name; ?>" />
                                                        </div>
                                                    </div>
                                                </div>
    
                                                
                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="col-form-label" for="basic-icon-default-email">Email</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                                            <input type="text" name="email" id="basic-icon-default-email" class="form-control" placeholder="yourname" aria-label="john.doe" aria-describedby="basic-icon-default-email2" value="<?php echo $email; ?>" />
                                                            <span id="basic-icon-default-email2" class="input-group-text">@gmail.com</span>
                                                        </div>
                                                        <div class="form-text">You can use letters, numbers & periods</div>
                                                    </div>
                                                </div>
                                                
                                                   <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="col-form-label" for="message">message</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group input-group-merge">
                                                            <span id="message-addon" class="input-group-text"></span>
                                                            <input type="message" name="message" class="form-control" id="number" placeholder="Enter number" aria-label="Enter number" aria-describedby="number-addon" />
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
