@extends('layout.app')
@section('content')
    <div class=" default-height">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Setting</a></li>
                </ol>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <form action="{{ route('admin.settings.settings.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="type" value="site_setting">

                        <!-- Site Name -->
                        <div class="mb-3">
                            <label class="form-label">Site Name</label>
                            <input type="text" class="form-control w-50" name="site_name" placeholder="Name"
                                value="{{ old('site_name', $currentSettings->get('site_name')->data_value ?? '') }}">
                        </div>

                        <div class="row">
                            <div class="col-xl-8">

                                <!-- Meta Info Section -->
                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title">
                                        <div class="cpa">Meta Info</div>
                                        <div class="tools">
                                            <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                                    class="fal fa-angle-down"></i></a>
                                        </div>
                                    </div>
                                    <div class="cm-content-body form excerpt">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Meta Title</label>
                                                        <input type="text" class="form-control" name="meta_title"
                                                            placeholder="Title"
                                                            value="{{ old('meta_title', $currentSettings->get('meta_title')->data_value ?? '') }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Meta Description</label>
                                                    <textarea class="form-control" rows="3" name="meta_description" id="editor">{{ old('meta_description', $currentSettings->get('meta_description')->data_value ?? '') }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- NoIndex/NoFollow Section -->
                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title"
                                        style="display: flex; align-items: center; justify-content: space-between; padding: 20px;">
                                        <label for="noindex-follow"
                                            style="font-size: 1rem; font-weight: 600; color: #1E3FB4;">NoIndex /
                                            NoFollow</label>
                                        <div class="radio-group" style="display: flex; gap: 15px; align-items: center;">
                                            <label style="font-size: 14px; color: #495057;">
                                                <input type="radio" name="noIndexFollow" value="noIndexFollow"
                                                    id="noindex-follow-yes" style="margin-right: 5px;"
                                                    {{ old('noIndexFollow', $currentSettings->get('noIndexFollow')->data_value ?? '') == 'noIndexFollow' ? 'checked' : '' }}>
                                                Yes
                                            </label>
                                            <label style="font-size: 14px; color: #495057;">
                                                <input type="radio" name="noIndexFollow" value="indexFollow"
                                                    id="noindex-follow-no" style="margin-right: 5px;"
                                                    {{ old('noIndexFollow', $currentSettings->get('noIndexFollow')->data_value ?? '') == 'indexFollow' ? 'checked' : '' }}>
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Social Links Section -->
                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title">
                                        <div class="cpa">Social Links</div>
                                        <div class="tools">
                                            <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                                    class="fal fa-angle-down"></i></a>
                                        </div>
                                    </div>
                                    <div class="cm-content-body form excerpt">
                                        <div class="card-body">
                                            <label class="form-label">Facebook</label>
                                            <input type="text" class="form-control" name="facebook"
                                                value="{{ old('facebook', $currentSettings->get('facebook')->data_value ?? '') }}">
                                        </div>
                                        <div class="card-body">
                                            <label class="form-label">Instagram</label>
                                            <input type="text" class="form-control" name="instagram"
                                                value="{{ old('instagram', $currentSettings->get('instagram')->data_value ?? '') }}">
                                        </div>
                                        <div class="card-body">
                                            <label class="form-label">LinkedIn</label>
                                            <input type="text" class="form-control" name="linkedin"
                                                value="{{ old('linkedin', $currentSettings->get('linkedin')->data_value ?? '') }}">
                                        </div>
                                        <div class="card-body">
                                            <label class="form-label">Twitter / X</label>
                                            <input type="text" class="form-control" name="twitter"
                                                value="{{ old('twitter', $currentSettings->get('twitter')->data_value ?? '') }}">
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Text Section -->
                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title">
                                        <div class="cpa">Footer Text</div>
                                        <div class="tools">
                                            <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                                    class="fal fa-angle-down"></i></a>
                                        </div>
                                    </div>
                                    <div class="cm-content-body publish-content form excerpt">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label">Add Text</label>
                                                <textarea class="form-control" rows="3" name="footer_text">{{ old('footer_text', $currentSettings->get('footer_text')->data_value ?? '') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-end mb-3">
                                    <button class="btn btn-primary" type="submit">Save Settings</button>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="right-sidebar-sticky">
                                    <div class="filter cm-content-box box-primary">
                                        <div class="content-title">
                                            <div class="cpa">Logo Image</div>
                                            <div class="tools">
                                                <a href="javascript:void(0);" class="expand SlideToolHeader">
                                                    <i class="fal fa-angle-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="cm-content-body publish-content form excerpt">
                                            <div class="card-body">
                                                <div class="avatar-upload d-flex align-items-center">
                                                    <div class="position-relative">
                                                        <!-- Logo Preview -->
                                                        <div class="avatar-preview">
                                                            <div id="imagePreview"
                                                                style="background-image: url({{ isset($currentSettings['logo']) && $currentSettings['logo']->data_value ? asset('storage/' . $currentSettings['logo']->data_value) : asset('assets/images/no-img-avatar.png') }});">
                                                            </div>
                                                        </div>
                                                        <!-- File Input -->
                                                        <div class="change-btn d-flex align-items-center flex-wrap">
                                                            <input type="file" class="form-control d-none"
                                                                id="imageUpload" accept=".png, .jpg, .jpeg"
                                                                name="logo">
                                                            <label for="imageUpload" class="btn btn-primary ms-0">Select
                                                                Image</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
    <!--**********************************
                                                                                                                                    Scripts
                                                                                                                                ***********************************-->

    <!-- Ck-editor -->
    <script src="{{ asset('assets/vendor/ckeditor/ckeditor.js') }}"></script>

    <script>
         ClassicEditor
    .create(document.querySelector('#editor'), {
        toolbar: [
            'heading', '|',
            'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
            'imageUpload', 'blockQuote', 'insertTable', 'undo', 'redo'
        ],
        ckfinder: {
            uploadUrl: '{{ route('admin.media.uploadimages') }}?_token={{ csrf_token() }}'
        }
    })
    .catch(error => {
        console.error(error);
    });
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
        });

        if (jQuery('input[name=tagify]').length > 0) {

            // The DOM element you wish to replace with Tagify
            var input = document.querySelector('input[name=tagify]');

            // initialize Tagify on the above input node reference
            new Tagify(input);

        }
    </script>


    <!-- JavaScript for Previewing Image Upload -->
    <script>
        document.getElementById('imageUpload').addEventListener('change', function(event) {
            const input = event.target;
            const imagePreview = document.getElementById('imagePreview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.style.backgroundImage = `url(${e.target.result})`;
                };
                reader.readAsDataURL(input.files[0]);
            }
        });
    </script>
@endpush
