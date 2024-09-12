@extends('admin.layouts.main')
@section('content')


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
            <div class="row">
              <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                        <p class="mb-4">
                          You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                          your profile.
                        </p>

                        <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary">View Badges</a>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="{{ asset('backend-assets/img/illustrations/man-with-laptop-light.png') }}" height="140" alt="View Badge User"
                          data-app-dark-img="{{ asset('backend-assets/img/illustrations/man-with-laptop-dark.png') }}"
                          data-app-light-img="{{ asset('backend-assets/img/illustrations/man-with-laptop-light.png') }}" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <!-- Additional content -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / Content -->
        </div>
        <!-- / Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>
  </div>
  <!-- / Layout wrapper -->
</body>

@endsection
