@extends('layout.app')
@section('title', $title)
@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Profile</a></li>
            </ol>
        </div>
        <!-- row -->
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">
                                <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="profile-details">
                                <div class="profile-name px-3 pt-2">
                                    <h4 class="text-primary mb-0">Mitchell C. Shay</h4>
                                    <p>UX / UI Designer</p>
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0">info@example.com</h4>
                                    <p>Email</p>
                                </div>
                                <div class="dropdown ms-auto">
                                    <a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="dropdown-item"><a href="javascript:void(0);"><i class="fa fa-user-circle text-primary me-2"></i> View profile</a></li>
                                        <li class="dropdown-item"><a href="javascript:void(0);"><i class="fa fa-users text-primary me-2"></i> Add to close friends</a></li>
                                        <li class="dropdown-item"><a href="javascript:void(0);"><i class="fa fa-plus text-primary me-2"></i> Add to group</a></li>
                                        <li class="dropdown-item"><a href="javascript:void(0);" class="text-danger"><i class="fa fa-ban text-danger me-2"></i> Block</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-xl-12">
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#profile" data-bs-toggle="tab"
                                            class="nav-link active show">Info</a>
                                    </li>
                                    <li class="nav-item"><a href="#update-profile" data-bs-toggle="tab"
                                            class="nav-link">Update Profile</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="profile" class="tab-pane fade active show">

                                        <div class="profile profile-personal-info pt-4">
                                            <h4 class="text-primary mb-4">Personal Information</h4>
                                            <div class="profile-photo mb-4">
                                                @if ($user->profile_picture)
                                                    <img src="{{ asset('storage/' . $user->profile_picture) }}"
                                                        class="img-fluid rounded-circle" alt="">
                                                @else
                                                    <div class="avatar-profile">
                                                        {{ $user->thumbnail }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{ ucfirst($user->name) }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{ $user->email }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Role <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{ ucfirst($user->role) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="update-profile" class="tab-pane fade">
                                        <div class="pt-4">
                                            <div class="profile settings-form">
                                                <h4 class="text-primary mb-4">Update Profile</h4>
                                                <form id="submit-profile">
                                                    @csrf
                                                    <div class="profile-photo position-relative mb-4">
                                                        <label for="select-image">
                                                            <i class="fas fa-pen edit-icon"></i>
                                                        </label>
                                                        <input type="file" name="profile_picture" id="select-image"
                                                            accept="image/*" hidden>
                                                        @if ($user->profile_picture)
                                                            <img id="image-preview"
                                                                src="{{ asset('storage/' . $user->profile_picture) }}"
                                                                class="img-fluid rounded-circle" alt="">
                                                        @else
                                                            <div class="avatar-profile">
                                                                {{ $user->thumbnail }}
                                                            </div>
                                                        @endif
                                                    </div>

                                                    <div class="row mb-4">
                                                        <div class="form-group col-md-6">
                                                            <label>Name</label>
                                                            <input type="text" name="name"
                                                                value="{{ $user->name ?? '' }}" placeholder="Name"
                                                                class="form-control">
                                                            <span class="text-danger">
                                                                @error('name')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Email</label>
                                                            <input type="email" name="email"
                                                                value="{{ $user->email ?? '' }}" placeholder="Email"
                                                                class="form-control">
                                                            <span class="text-danger">
                                                                @error('email')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" placeholder="1234 Main St" class="form-control">
                                                    </div> --}}

                                                    <h4 class="text-primary">Change Password</h4>

                                                    <div class="form-group col-md-6 pr-3">
                                                        <label>Old Password</label>
                                                        <input id="password" type="password" name="password"
                                                            placeholder="Password" class="form-control">
                                                        <span class="text-danger">
                                                            @error('password')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label>New Password</label>
                                                            <input id="new_password_confirmation" type="password"
                                                                name="new_password_confirmation" placeholder="Password"
                                                                class="form-control">
                                                            <span class="text-danger">
                                                                @error('new_password_confirmation')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Confirm Password</label>
                                                            <input id="confirmed" type="password" name="confirmed"
                                                                placeholder="Password" class="form-control">
                                                        </div>
                                                    </div>

                                                    <button class="btn btn-primary" type="submit">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="crop-modal" tabindex="-1" aria-labelledby="crop-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="crop-modal-label">Crop Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div>
                        <img id="crop-image-preview" src="" alt="Image for Cropping"
                            style="max-width: 100%; display: none;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="crop-image-save" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script>
        var cropper;
        var cropModal = new bootstrap.Modal(document.getElementById('crop-modal'));

        $(document).ready(function() {
            $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                history.pushState(null, null, $(e.target).attr('href'));
            });
            const hash = window.location.hash;
            if (hash) {
                $(`a[href="${hash}"]`).tab('show');
            }

            // change image
            $('#select-image').on('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const cropImagePreview = document.getElementById('crop-image-preview');
                        cropImagePreview.src = e.target.result;
                        cropImagePreview.style.display = 'block';
                        // $('#image-preview').attr('src', e.target.result);
                        cropModal.show();
                        cropImagePreview.onload = function() {
                            if (cropper) {
                                cropper.destroy();
                            }
                            cropper = new Cropper(cropImagePreview, {
                                aspectRatio: 16 / 9,
                                viewMode: 1,
                            });
                        }
                    }
                    reader.readAsDataURL(file);
                }
            })

            $('#crop-image-save').on('click', function() {
                if (cropper) {
                    const canvas = cropper.getCroppedCanvas({
                        width: 200,
                        height: 200,
                    });

                    canvas.toBlob(function (blob) {
                    const url = URL.createObjectURL(blob);
                    $('#image-preview').attr('src', url);

                        // Optionally, send the cropped image to the server
                        const formData = new FormData();
                        formData.append('profile_picture', blob);

                        cropModal.hide();
                    });
                }
            })

            // update profiel
            $('#submit-profile').validate({
                rules: {
                    name: "required",
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        minlength: 8,
                    },
                    new_password_confirmation: {
                        required: function() {
                            return $("#password").val() !== '';
                        },
                        minlength: 8,
                    },
                    confirmed: {
                        required: function() {
                            return $('#password').val() !== "";
                        },
                        equalTo: '#new_password_confirmation',
                    }
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                    error.addClass('text-danger');
                },
                highlight: function(element) {
                    $(element).addClass('is-invalid');
                    const errorElement = $(element).next('label.error');
                    const icon = '<i class="fa-solid fa-triangle-exclamation"></i> ';
                    errorElement.html(icon + errorElement.html());
                },
                unhighlight: function(element) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form, event) {
                    event.preventDefault();
                    var formObj = $(form);
                    swal.fire({
                        title: "Do you want to save the changes?",
                        icon: "warning",
                        showCancelButton: true,
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Save",
                        confirmButtonColor: "#3085d6",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "{{ route('admin.profile.update') }}",
                                type: 'post',
                                data: new FormData(form),
                                processData: false,
                                contentType: false,
                                success: function(response) {
                                    if (response.success === true) {
                                        swal.fire({
                                            title: "Updated",
                                            text: response.message,
                                            icon: "success",
                                        }).then((response) => {
                                            location.reload();
                                        })
                                    }
                                },
                                error: function(xhr) {
                                    if (xhr.status === 422) {
                                        var errors = xhr.responseJSON.errors;
                                        for (let field in errors) {
                                            var inputField = $(`[name="${field}"]`);
                                            var errorMessage = errors[field][
                                                0
                                            ]; // Get the first error message
                                            inputField.addClass('is-invalid');
                                            inputField.next('.error')
                                                .remove(); // Remove existing error message
                                            inputField.after(
                                                `<label class="error text-danger">${errorMessage}</label>`
                                            ); // Add new error message
                                        }
                                    } else {
                                        console.error('Unexpected error:', xhr
                                            .responseText);
                                    }
                                }

                            });
                        }
                    });
                }
            });

        });
    </script>
@endpush
