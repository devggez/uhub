@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="page-content">


        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div>
                                <img class="wd-70 rounded-circle"
                                    src=" {{ !empty($profileData->photo) ? url('uploads/admin_images/' . $profileData->photo) : url('uploads/no_image.jpg') }}"
                                    alt="profile">
                                <span class="h4 ms-3">{{ $profileData->name }}</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">ID:</label>
                            <p class="text-muted">{{ $profileData->uiuid }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">{{ $profileData->email }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                            <p class="text-muted">{{ $profileData->phone }}</p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Change Password</h6>

                                <form class="forms-sample" method="POST" action=" {{ route('admin.update.password') }} ">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="old_password" class="form-label">Old Passwoed</label>
                                        <input name="old_password" type="password" class="form-control" id="old_password"
                                            autocomplete="off">
                                        @error('old_password')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">New Password</label>
                                        <input name="new_password" type="password" class="form-control" id="new_password"
                                            autocomplete="off">
                                        @error('new_password')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="new_password_confirmation" class="form-label">Confirm Password</label>
                                        <input name="new_password_confirmation" type="password" class="form-control" id="new_password_confirmation"
                                            autocomplete="off">
                                        
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- middle wrapper end -->
        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#uploadImage').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
