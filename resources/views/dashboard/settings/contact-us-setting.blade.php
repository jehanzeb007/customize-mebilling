@extends('layout.app')
@section('content')
    <div class=" default-height">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Contact us</a></li>
                </ol>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">

                    <div class="main-check" style="display:none;">
                        <div class="row">
                            <h6 class="mb-3">Show on screen</h6>
                            <div class="col-xl-2 col-lg-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-1">
                                    <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-1">
                                        Page Attributes
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-2">
                                    <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-2">
                                        Featured Image

                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-3">
                                    <label class="form-check-label mb-0" for="flexCheckDefault-3">
                                        Excerpt
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-4">
                                    <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-4">
                                        Custom Fields
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-5">
                                    <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-5">
                                        Discussion
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-6">
                                    <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-6">
                                        Slug
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-7">
                                    <label class="form-check-label mb-0" for="flexCheckDefault-7">
                                        Author
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-8">
                                    <label class="form-check-label mb-0" for="flexCheckDefault-8">
                                        Page Type
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-9">
                                    <label class="form-check-label mb-0" for="flexCheckDefault-9">
                                        Seo
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-8">

                            <form action="{{ route('admin.settings.settings.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="type" value="contact_setting">

                                <!-- Latitude -->
                                <div class="form-group">
                                    <label for="latitude">Latitude</label>
                                    <input type="text" name="latitude" class="form-control"
                                        value="{{ old('latitude', $contactSettings['latitude']->value ?? '') }}">
                                </div>

                                <!-- Longitude -->
                                <div class="form-group">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" name="longitude" class="form-control"
                                        value="{{ old('longitude', $contactSettings['longitude']->value ?? '') }}">
                                </div>

                                <!-- Description -->
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" id="description">{{ old('description', $contactSettings['description']->value ?? '') }}</textarea>
                                </div>

                                <!-- Address -->
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" class="form-control" id="address"
                                        >{{ old('address', $contactSettings['address']->value ?? '') }}</textarea>
                                </div>

                                <!-- Phone No. -->
                                <div class="form-group">
                                    <label for="phone_no">Phone No.</label>
                                    <input type="text" name="phone_no" class="form-control"
                                        value="{{ old('phone_no', $contactSettings['phone_no']->value ?? '') }}">
                                </div>

                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ old('email', $contactSettings['email']->value ?? '') }}">
                                </div>

                                <!-- Submit Button -->
                                <div class="text-end mb-3">
                                    <button type="submit" class="btn btn-primary">Save Contact Settings</button>
                                </div>
                            </form>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection


@push('js')


    <script src="https://cdn.tiny.cloud/1/z6kb5eytp65raef6tfmipfzb5i411ze1jwcxe05m5vccgz1b/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: "#description, #address",
            plugins: "code table list image",
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | table | image | code',
            valid_elements: '*[*]'
        });
    //     ClassicEditor
    // .create(document.querySelector('#editor'), {
    //     toolbar: [
    //         'heading', '|',
    //         'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
    //         'imageUpload', 'blockQuote', 'insertTable', 'undo', 'redo'
    //     ],
    //     ckfinder: {
    //         uploadUrl: '{{ route('admin.media.uploadimages') }}?_token={{ csrf_token() }}'
    //     }
    // })
    // .catch(error => {
    //     console.error(error);
    // });
    </script>

    <script>
        class MyUploadAdapter {
            constructor(loader) {
                this.loader = loader;
            }

            upload() {
                return this.loader.file.then(file => new Promise((resolve, reject) => {
                    const formData = new FormData();
                    formData.append('upload', file);

                    fetch('/your-upload-endpoint', { // Replace with your image upload URL
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(result => resolve({
                            default: result.url
                        })) // The server should return the image URL
                        .catch(error => reject(error));
                }));
            }
        }

        function MyCustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new MyUploadAdapter(loader);
            };
        }
    </script>



    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").on('change', function() {

            readURL(this);
        });
        $('.remove-img').on('click', function() {
            var imageUrl = "images/no-img-avatar.png";
            $('.avatar-preview, #imagePreview').removeAttr('style');
            $('#imagePreview').css('background-image', 'url(' + imageUrl + ')');
        }); <
        !--tagify.js-- >

            if (jQuery('input[name=tagify]').length > 0) {

                // The DOM element you wish to replace with Tagify
                var input = document.querySelector('input[name=tagify]');

                // initialize Tagify on the above input node reference
                new Tagify(input);

            }
    </script>


    <!-- JavaScript for Previewing Image Upload -->
    <script>
        document.getElementById('imageUploadInput').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var imagePreview = document.getElementById('imagePreview');
                imagePreview.style.backgroundImage = 'url(' + reader.result + ')';
            };
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>
@endpush
