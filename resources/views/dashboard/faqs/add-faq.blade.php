@extends('layout.app')
@section('title', $title)
@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.faqs.index')}}">FAQs</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{$breadcrumbs}}</a></li>
            </ol>
        </div>

        <div class="row">
            <div class="col-xl-10">
                <form method="POST" action="{{route('admin.faqs.store', $faqs->id ?? null)}}">
                    @csrf
                    <div class="mb-3">
                        <label class="title">Question</label>
                        <input type="text" class="form-control" name="question" placeholder="Title" value="{{$faqs->question ?? ''}}">
                        <span class="text-danger">
                            @error('question')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="card h-auto mb-0">
                        <div class="card-header">
                            <h4 class="card-title">Answer</h4>
                        </div>
                        <div class="card-body custom-ekeditor">
                            <textarea id="ckeditor" name="answer">{{$faqs->answer ?? ''}}</textarea>
                        </div>
                    </div>
                    <span class="text-danger">
                        @error('answer')
                            {{ $message }}
                        @enderror
                    </span>

                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
@push('js')

    <script src="{{ asset('assets/vendor/ckeditor/ckeditor.js') }}"></script>
@endpush
