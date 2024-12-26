@extends('layout.app')
@section('content')
    <div class=" default-height">
        <div class="container-fluid">
            <div class="page-titles d-flex align-items-center justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Section</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">List</a></li>
                </ol>\<a href="{{ route('admin.section.addSection') }}" class="btn btn-primary">Add Section</a>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    {{-- <div class="filter cm-content-box box-primary">
                        <div class="content-title">
                            <div class="cpa">
                                <i class="fa-solid fa-filter me-2"></i>Filter
                            </div>
                            <div class="tools">
                                <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                        class="fal fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div class="cm-content-body  form excerpt">
                            <div class="card-body pb-3">
                                <div class="row">
                                    <div class="col-4">
                                        <input type="text" class="form-control mb-3" id="exampleFormControlInput1"
                                            placeholder="Name">
                                    </div>

                                    <div class="col-4">
                                        <input class="form-control  mb-3" type="text" id="datepicker">
                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-primary" title="Click here to Search" type="button"><i
                                                class="fa-solid fa-filter me-1"></i>Filter</button>
                                        <button class="btn btn-danger light" title="Click here to remove filter"
                                            type="button">Remove Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="filter cm-content-box box-primary">
                        <div class="content-title">
                            <div class="cpa">
                                <i class="fa-solid fa-file-lines me-1"></i>Section List
                            </div>
                            <div class="tools">
                                <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                        class="fal fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div class="cm-content-body form excerpt">
                            <div class="card-body py-3">

                                <div class="table-responsive">
                                    <table class="table table-striped table-condensed flip-content">
                                        <thead>
                                            <tr>
                                                <th class="text-black">S.No</th>
                                                <th class="text-black">Title</th>
                                                <th class="text-black">Value</th>
                                                <th class="text-black text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sections as $index => $section)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ ucwords(str_replace('_', ' ', $section->key)) }}</td>
                                                    <td>
                                                        {!! $section->value['short_description'] ?? '' !!}
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="{{route('admin.section.editSection', $section->id) }}" class="btn btn-warning btn-sm content-icon">
                                                            <i class="fa fa-edit" id='edit-{{$section->id}}'></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm content-icon">
                                                            <i class="fa fa-times" id='delete-{{$section->id}}'></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('admin-assets/js/dashboard/cms.js') }}"></script>
@endpush
