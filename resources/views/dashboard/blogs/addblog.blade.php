@extends('layout.app')
@section('content')
    <div class=" default-height">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.blog.blogpage')}}">Blog</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Blog</a></li>
                </ol>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="mb-3">
                        <ul class="d-flex align-items-center flex-wrap">
                            <li><a href="{{ route('admin.blog.blogpage') }}" class="btn btn-primary">Blog List</a></li>
                            <li><a href="{{ route('admin.blog.blog-category') }}" class="btn btn-primary mx-1">Blog
                                    Category</a></li>
                            {{-- <li><a href="blog-category.html" class="btn btn-primary me-1 mt-sm-0 mt-1">Add Blog Category</a>
                            </li> --}}
                            <li><a href="javascript:void(0);" class="btn btn-primary open mt-1 mt-md-0">Screen Option</a>
                            </li>
                        </ul>
                    </div>
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


                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form
                                action="{{ isset($blog) ? route('admin.blog.update', $blog->id) : route('admin.blog.store') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf

                                <!-- Blog Name Field -->
                                <div class="mb-3">
                                    <label class="form-label">Author Name</label>
                                    <input type="text" name="author_name" value="{{ old('name', $blog->author_name ?? '') }}"
                                        class="form-control w-100" placeholder="Name">
                                    @error('auhtor_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Author Name -->
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" value="{{ old('name', $blog->name ?? '') }}"
                                           class="form-control w-100" placeholder="Name">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Description Field -->
                                <div class="card h-auto mb-3">
                                    <div class="card-body pt-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" id="editor">{{ old('description', $blog->description ?? '') }}</textarea>
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Slug Field -->
                                @if (!empty($blog))
                                    <div class="filter cm-content-box box-primary mb-3">
                                        <div class="content-title">
                                            <div class="cpa">Slug</div>
                                        </div>
                                        <div class="cm-content-body form excerpt">
                                            <div class="card-body">
                                                <label class="form-label">Slug</label>
                                                <input type="text" name="slug"
                                                    value="{{ old('slug', $blog->slug ?? '') }}" class="form-control">
                                                @error('slug')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <!-- Meta Description -->
                                <div class="filter cm-content-box box-primary mb-3">
                                    <div class="content-title">
                                        <div class="cpa">Meta Description</div>
                                    </div>
                                    <div class="cm-content-body form excerpt">
                                        <div class="card-body">
                                            <div class="row">
                                                <!-- Meta Title -->
                                                <div class="col-xl-6 col-sm-6 mb-3">
                                                    <label class="form-label">Page Title</label>
                                                    <input type="text" class="form-control" name="meta[title]"
                                                        placeholder="Enter page title"
                                                        value="{{ old('meta.title', $metaDescription['title'] ?? '') }}">
                                                    @error('meta.title')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- Meta Description -->
                                                <div class="col-xl-6 col-sm-6">
                                                    <label class="form-label">Description</label>
                                                    <textarea class="form-control" name="meta[description]" rows="3" placeholder="Enter meta description">{{ old('meta.description', $metaDescription['description'] ?? '') }}</textarea>
                                                    @error('meta.description')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="text-end mb-3">
                                    <button class="btn btn-primary"
                                        type="submit">{{ isset($blog) ? 'Update' : 'Create' }}</button>
                                </div>


                        </div>
                        <div class="col-xl-4">
                            <div class="right-sidebar-sticky">




                                <!-- Featured Image Upload -->
                                <div class="filter cm-content-box box-primary mb-3">
                                    <div class="content-title">
                                        <div class="cpa">Featured Image</div>
                                        <div class="tools">
                                            <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                                    class="fal fa-angle-down"></i></a>
                                        </div>
                                    </div>
                                    <!-- Image Upload -->
                                    <div class="cm-content-body publish-content form excerpt">
                                        <div class="card-body">
                                            <div class="avatar-upload d-flex align-items-center">
                                                <div class="position-relative">
                                                    <div class="avatar-preview">
                                                        <input type="hidden" name="oldImage"
                                                            value="{{ old('oldImage', $blog->image ?? '') }}">
                                                        @if (isset($blog) && $blog->image)
                                                            <div id="imagePreview"
                                                                style="background-image: url({{ asset('storage/' . $blog->image) }});">
                                                            </div>
                                                        @else
                                                            <div id="imagePreview"
                                                                style="background-image: url({{ asset('assets/images/no-img-avatar.png') }});">
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="change-btn d-flex align-items-center flex-wrap">
                                                        <input type="file" class="form-control d-none"
                                                            id="imageUploadInput" name="image" accept="image/*">
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
    <!--**********************************
                                                                                            Scripts
                                                                                        ***********************************-->

    <!-- tagify -->
    <script src="{{ asset('assets/vendor/tagify/tagify.js') }}"></script>

    <!-- Ck-editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>







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
@endpush
