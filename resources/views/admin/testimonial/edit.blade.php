@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Testimonials /</span> Edit Testimonial</h4>

    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Testimonial</h5>
                    <small class="text-muted float-end">Update testimonial information</small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('testimonials.update', $testimonial->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                            <label class="col-form-label" for="message">Message</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-message"></i></span>
                                <textarea name="message" class="form-control" id="message" placeholder="Enter testimonial message" required>{{ $testimonial->message }}</textarea>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                            <label class="col-form-label" for="name">Image</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-image2" class="input-group-text"></span>
                                <input type="file" name="image" id="basic-icon-default-image" class="form-control" aria-label="Upload image" />
                            </div>
                            @if ($testimonial->image)
                            <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Current Image" style="width: 100px; height: auto; margin-top: 10px;">
                            @endif
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                            <label class="col-form-label" for="basic-icon-default-name">Name</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-name2" class="input-group-text"></span>
                                <input type="text" name="name" class="form-control" id="basic-icon-default-name" placeholder="Enter name" value="{{ $testimonial->name }}" required />
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                            <label class="col-form-label" for="basic-icon-default-position">Position</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-position2" class="input-group-text"></span>
                                <input type="text" name="position" class="form-control" id="basic-icon-default-position" placeholder="Enter position" value="{{ $testimonial->position }}" required />
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
@endsection
