@extends('layout.app')
@section('title', $title)
@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.cms.index')}}">CMS</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{$breadcrumb}}</a></li>
            </ol>
        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div>
                    <a href="{{ route('admin.cms.index') }}" class="btn btn-primary mb-3">Content List</a>
                    <button type="button" class="btn btn-primary mb-3 open">Screen Option</button>
                </div>
                <div class="main-check" style="display:none;">
                    <div class="row">
                        <h6 class="mb-3">Show on screen</h6>
                        <div class="col-xl-2 col-lg-3 col-sm-4">
                            <div class="form-check mb-sm-3 mb-1">
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
                    <div class="col-xl-10">
                        <form action="{{route('admin.cms.store', $cmsContent->id ?? null)}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Title" value="{{$cmsContent->name ?? ''}}">
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>


                            <div class="filter cm-content-box box-primary">
                                <div class="content-title">
                                    <div class="cpa">
                                        Short Description
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                                class="fal fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div class="cm-content-body  form excerpt">
                                    <div class="card h-auto">
                                        <div class="card-body pt-3">
                                            <textarea id="editor1" name="short_description">{!! $cmsContent->short_description ?? '' !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-danger">
                                    @error('short_description')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            @if (!empty($cmsContent))
                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title">
                                        <div class="cpa"> Slug
                                        </div>
                                        <div class="tools">
                                            <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                                    class="fal fa-angle-down"></i></a>
                                        </div>
                                    </div>
                                    <div class="cm-content-body  form excerpt">
                                        <div class="card-body">
                                            <label class="form-label">Slug</label>
                                            <input type="text" class="form-control" name="slug" value="{{$cmsContent->slug ?? ''}}">
                                            <span class="text-danger">
                                                @error('slug')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="filter cm-content-box box-primary">
                                <div class="content-title">
                                    <div class="cpa">
                                        Long Description
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                                class="fal fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div class="cm-content-body  form excerpt">
                                    <div class="card h-auto">
                                        <div class="card-body pt-3">
                                            <textarea id="editor2" name="long_description">{!! $cmsContent->long_description ?? '' !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-danger">
                                    @error('long_description')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="filter cm-content-box box-primary">
                                <div class="content-title">
                                    <div class="cpa">Seo
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                                class="fal fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div class="cm-content-body  form excerpt">
                                    <div class="card-body">
                                        <label class="form-label">Page Title</label>
                                        <input type="text" class="form-control mb-3" name="meta[title]" placeholder="Page title" value="{{$cmsContent->meta_description['title'] ?? ''}}">
                                        <div class="row">
                                            {{-- <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Keywords</label>
                                                <input type="text" class="form-control mb-3 mb-sm-0"
                                                    placeholder="Enter meta Keywords">
                                            </div> --}}
                                            <div class="col-xl-12 col-sm-12">
                                                <label class="form-label">Descriptions</label>
                                                <textarea class="form-control" name="meta[description]" rows="3" placeholder="Enter meta Keywords">{{$cmsContent->meta_description['description'] ?? ''}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-danger">
                                        @error('meta_description')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/js/dashboard/cms.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/select2-init.js') }}"></script>
    <script src="{{ asset('assets/vendor/ckeditor/ckeditor.js') }}"></script>

    <script>
        ClassicEditor.create(document.querySelector('#editor1'))
            .then(editor => {
                window.editor1 = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });

        ClassicEditor.create(document.querySelector('#editor2'))
            .then(editor => {
                window.editor2 = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>
@endpush
