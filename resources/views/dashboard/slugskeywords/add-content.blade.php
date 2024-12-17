@extends('layout.app')
@section('content')
    <div class=" default-height">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Slugs and Keywords</a></li>
                </ol>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="mb-3">

                    </div>


                    <div class="row">
                        <div class="col-xl-12">


                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form
                                action="{{ isset($slugKeyword) ? route('admin.slugs-keywords.update', $slugKeyword->id) : route('admin.slugs-keywords.store') }}"
                                method="POST">
                                @csrf
                                @if (isset($slugKeyword))
                                    @method('PUT')
                                @endif
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" name="slug" id="slug" class="form-control"
                                        value="{{ old('slug', $slugKeyword->slug ?? '') }}" required>
                                    @error('slug')
                                        <span class="text-dangor">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>



                                    <textarea name="description" id="editor" >{{ old('description', $slugKeyword->description ?? '') }}</textarea>

                                    @error('description')
                                        <span class="text-dangor">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    {{ isset($slugKeyword) ? 'Update' : 'Add' }}
                                </button>
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
@endpush
