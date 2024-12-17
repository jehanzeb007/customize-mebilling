@extends('layout.app')
@section('content')
    <div class=" default-height">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Contact Us Setting</a></li>
                </ol>
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
                                <i class="fa-solid fa-file-lines me-1"></i>Contact Us List
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contactSettings as $index => $setting)
                                                <tr>
                                                    <!-- Serial number -->
                                                    <td>{{ $loop->iteration }}</td>

                                                    <!-- Title (formatted) -->
                                                    <td>{{ ucwords(str_replace('_', ' ', $setting->data_key)) }}</td>

                                                    <!-- Value -->
                                                    <td>{{ $setting->data_value }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="text-end mb-3">
                                    <a href="{{ route('admin.settings.contactsettings') }}" class="btn btn-primary"
                                        type="submit">Edit Settings</a>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        $(function() {
            $("#datepicker").datepicker({
                autoclose: true,
                todayHighlight: true
            }).datepicker('update', new Date());

        });
    </script>
@endpush
