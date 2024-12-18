@extends('layout.app')
@section('content')
    <div class="default-height">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Testimonial</a></li>
                </ol>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-12">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form
                                action="{{ $testimonial->exists ? route('admin.testimonials.update', $testimonial->id) : route('admin.testimonials.store') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @if ($testimonial->exists)
                                    @method('PUT') <!-- Use PUT method for update -->
                                @endif

                                <!-- Name Field -->
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" value="{{ old('name', $testimonial->name) }}"
                                        class="form-control w-100" placeholder="Enter Name">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!--Position Field -->
                                <div class="mb-3">
                                    <label class="form-label">Position</label>
                                    <input type="text" name="position" value="{{ old('position', $testimonial->position) }}"
                                        class="form-control w-100" placeholder="Enter your position">
                                    @error('position')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Testimonial Field -->
                                <div class="card h-auto mb-3">
                                    <div class="card-body pt-3">
                                        <label class="form-label">Testimonial</label>

                                        <textarea name="testimonial" id="editor">{{ old('testimonial', $testimonial->testimonial) }}</textarea>
                                        @error('testimonial')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Rating Field -->
                                <div class="mb-3">
                                    <label class="form-label">Rating</label>
                                    <input type="number" name="rating" min="1" max="5"
                                        value="{{ old('rating', $testimonial->rating) }}" class="form-control w-100"
                                        placeholder="Enter Rating (1-5)">
                                    @error('rating')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Image Upload -->
                                <div class="card h-auto mb-3">
                                    <div class="card-body">
                                        <label class="form-label">Upload Image</label>
                                        <div class="avatar-upload d-flex align-items-center">
                                            <div class="position-relative">
                                                <div class="avatar-preview">
                                                    <div id="imagePreview"
                                                        style="background-image: url({{ asset($testimonial->image ? 'storage/' . $testimonial->image : 'assets/images/no-img-avatar.png') }});">
                                                    </div>
                                                </div>
                                                <div class="change-btn d-flex align-items-center flex-wrap">
                                                    <input type="file" class="form-control d-none" id="imageUploadInput"
                                                        name="image" accept="image/*">
                                                    <label for="imageUploadInput" class="btn btn-primary ms-0">Select
                                                        Image</label>
                                                </div>
                                                @error('image')
                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-end mb-3">
                                    <button class="btn btn-primary"
                                        type="submit">{{ $testimonial->exists ? 'Update' : 'Create' }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

    <!-- Ck-editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>

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
        document.getElementById('imageUploadInput').addEventListener('change', function(event) {
            console.log("Image selected"); // Add this to see if the event is firing
            var reader = new FileReader();

            reader.onload = function() {
                var imagePreview = document.getElementById('imagePreview');
                imagePreview.style.backgroundImage = 'url(' + reader.result + ')';
            };

            if (event.target.files && event.target.files[0]) {
                reader.readAsDataURL(event.target.files[0]);
            }
        });
    </script>
@endpush
