@extends('layout.app')
@section('content')
    <div class=" default-height">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.section.index') }}">Section</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Section</a></li>
                </ol>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">



                    <div class="row">
                        <div class="col-xl-8">

                            <form action="{{route('admin.section.store')}}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="key" class="form-control"
                                        value="{{ old('key', $sections->key ?? '') }}">
                                </div>

                                <!-- Short Description -->
                                <div class="form-group">
                                    <label for="short_description">Short Description</label>
                                    <textarea name="value[short_description]" class="form-control" id="short-description">{{ old('short_description', $sections->value['short_description']?? '') }}</textarea>
                                </div>

                                <!-- long Description -->
                                <div class="form-group">
                                    <label for="long_description">Long Description</label>
                                    <textarea name="value[long_description]" class="form-control" id="long-description">{{ old('long_description', $sections->value['long_description'] ?? '') }}</textarea>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-end mb-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
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

    {{-- editor --}}
    <script src="https://cdn.tiny.cloud/1/z6kb5eytp65raef6tfmipfzb5i411ze1jwcxe05m5vccgz1b/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#short-description, #long-description',
            plugins: 'lists table code image',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | table | image | code',
            valid_elements: '*[*]',
        })
    </script>
@endpush
