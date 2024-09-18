
@extends('admin.layouts.main')
@section('content')

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">contacts/</span> Add contact</h4>

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

                                        <?php
                                        $name =  $email = $message = $role = $status = "";

                                        if (isset($_GET['id'])) {
                                            $id = $_GET['id'];

                                            $sql = "SELECT * FROM contacts WHERE id=$id";
                                            $result = mysqli_query($conn, $sql);
                                            if ($row = mysqli_fetch_assoc($result)) {
                                                $name = $row['name'];
                                                $email = $row['email'];
                                                $message = $row['message'];
                                                $status = $row['status'];
                                            }
                                        }

                                        if (isset($_POST['save'])) {
                                            $name = $_POST['name'];
                                            $email = $_POST['email'];
                                            $message = $_POST['message'];
                                            $status = $_POST['status'];

                                            if ($name != "" && $email != ""  && $message != "" && $role != "" && $status != "") {
                                                $update = "UPDATE contacts SET name='$name',  email='$email', message='$message', role='$role', status='$status' WHERE id=$id";
                                                $result = mysqli_query($conn, $update);
                                                if ($result) {
                                                    echo "<div class='alert alert-success'>Data is Updated</div>";
                                                    echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
                                                } else {
                                                    echo "<div class='alert alert-danger'>Data is not Updated</div>";
                                                    echo "<meta http-equiv=\"refresh\" content=\"2;URL=create.php\">";
                                                }
                                            } else {
                                                echo "<div class='alert alert-danger'>All fields are required</div>";
                                                echo "<meta http-equiv=\"refresh\" content=\"2;URL=create.php\">";
                                            }
                                        }
                                        ?>

                                        <form class="row" method="POST" enctype="multipart/form-data" action="">
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
                                                <label class="form-label" for="basic-icon-default-password">message</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-message2" class="input-group-text"></span>
                                                        <input type="message" name="message" id="basic-icon-default-message" class="form-control" aria-label="Enter password" aria-describedby="basic-icon-default-password2" value="<?php echo $password; ?>" />
                                                    </div>
                                                </div>
                                            </div>

                                            

                                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                <label class="form-label" for="status">Status</label>
                                                <div class="col-sm-10">
                                                    <select name="status" class="form-control" id="status" required>
                                                        <option value="0" <?php if ($status == 0) echo "selected"; ?>>Pending</option>
                                                        <option value="1" <?php if ($status == 1) echo "selected"; ?>>In Progress</option>
                                                        <option value="2" <?php if ($status == 2) echo "selected"; ?>>Completed</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-10">
                                                <button type="submit" name="save" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <!-- / Content -->

@endsection
