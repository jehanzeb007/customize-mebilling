@extends('layout.app')
@section('title', $title)
@section('content')
    <div class="container-fluid">
        <div class="page-titles d-flex align-items-center justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Content</a></li>
            </ol>
            <a href="{{ route('admin.cms.addContent') }}" class="btn btn-primary">Add Content</a>
        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="filter cm-content-box box-primary">
                    <div class="content-title">
                        <h4 class="cpa card-title">
                            <i class="fa-sharp fa-solid fa-filter me-2"></i>Filter
                        </h4>
                        <div class="tools">
                            <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                    class="fal fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="cm-content-body form excerpt">
                        <div class="card-body pb-2">
                            <div class="row">
                                <div class="col-xl-3 col-xxl-6 col-sm-6 mb-3">
                                    <input type="text" class="form-control" id="cms-name" placeholder="Name">
                                </div>
                                <div class="col-xl-3 col-xxl-6 col-sm-6 mb-3">
                                    <input class="form-control mb-3" type="text" id="datepicker" placeholder="Date">
                                </div>
                                <div class="col-xl-3 col-xxl-6 col-sm-6 mb-3">
                                    <button class="btn btn-primary" title="Click here to Search" type="button"
                                        id="filter-cms"><i class="fa-sharp fa-solid fa-filter me-1"></i>Filter</button>
                                    <button class="btn btn-danger light ms-1" title="Click here to remove filter"
                                        onclick="removeFilter()" type="button">Remove Filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="mb-5">
                    <a href="{{ route('admin.cms.addContent') }}" class="btn btn-primary">Add Content</a>
                </div> --}}
                <div class="filter cm-content-box box-primary">
                    <div class="content-title">
                        <div class="cpa">
                            <i class="fa-solid fa-file-lines me-1"></i>Contact List
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
                                            <th class="text-black">Name</th>
                                            <th class="text-black">Slug</th>
                                            <th class="text-black">Short Description</th>
                                            <th class="text-black">Date</th>
                                            <th class="text-black text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($cms as $key => $data)
                                                <tr id='row-{{$data->id}}'>
                                                    <td>{{ ($cms->currentPage() - 1) * $cms->perPage() + $key + 1 }}</td>
                                                    <td>{{$data->name}}</td>
                                                    <td>{{$data->slug}}</td>
                                                    <td>{!! strip_tags($data->short_description) !!}</td>
                                                    <td>{{$data->created_at->format('Y-m-d')}}</td>
                                                    <td class="text-end">
                                                        <a href="{{route('admin.cms.editContent', $data->id)}}"
                                                            class="btn btn-warning btn-sm content-icon">
                                                            <i class="fa fa-edit" id='edit-{{$data->id}}'></i>
                                                        </a>
                                                        <a href="javascript:void(0)" onclick="deleteContent({{$data->id}})"
                                                            class="btn btn-danger btn-sm content-icon">
                                                            <i class="fa fa-times" id='delete-{{$data->id}}'></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach --}}
                                    </tbody>
                                </table>

                                @if ($cms->total() > 10)
                                    <div
                                        class="d-flex align-items-center width-defult justify-content-xl-between flex-wrap justify-content-center py-3">
                                        <small class="pagination-info">
                                            Page {{ $cms->currentPage() }} of {{ $cms->lastPage() }},
                                            showing {{ $cms->count() }} records out of {{ $cms->total() }} total,
                                            starting on record {{ $cms->firstItem() }}, ending on {{ $cms->lastItem() }}
                                        </small>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination mb-2 mb-sm-0">
                                                {!! $cms->links() !!}
                                            </ul>
                                        </nav>
                                    </div>
                                @endif

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/js/dashboard/cms.js') }}"></script>

    <script>
        const editContentUrl = '{{route('admin.cms.editContent', ':id')}}';
        loadData();

        function loadData(name = '', date = '', page = 1) {
            $.ajax({
                url: '{{ route('admin.cms.index') }}',
                type: 'GET',
                data: {
                    'name': name,
                    'date': date,
                    'page': page,
                },
                success: function(response) {

                    $('tbody').empty();
                    $('.pagination').empty();

                    if (response.data.length > 0) {

                        appendTableData(response.data, response.pagination.current_page, response.pagination
                            .per_page);
                        appendPagination(response.pagination);
                    } else {
                        noRecordFound();
                    }
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }

        // append data to table
        function appendTableData(data, currentPage, perPage) {
            data.forEach(function(data, index) {
                let formattedDate = new Date(data.created_at)
                    .toLocaleDateString('en-GB', {
                        day: '2-digit',
                        month: 'short',
                        year: 'numeric'
                    });

                $('tbody').append(`
                        <tr id='row-${data.id}'>
                            <td>${(currentPage - 1) * perPage + index + 1}</td>
                            <td>${data.name}</td>
                            <td>${data.slug}</td>
                            <td>${data.short_description}</td>
                            <td>${formattedDate}</td>
                            <td class="text-end">
                                <a href="${editContentUrl.replace(':id', data.id)}" class="btn btn-warning btn-sm content-icon">
                                    <i class="fa fa-edit" id='edit-${data.id}'></i>
                                </a>
                                <a href="javascript:void(0)" onclick="deleteContent(${data.id})" class="btn btn-danger btn-sm content-icon">
                                    <i class="fa fa-times" id='delete-${data.id}'></i>
                                </a>
                            </td>
                        </tr>
                    `);
            });
        }

        // pagination
        function appendPagination(pagination) {

            let paginationWrapper = $('.pagination');
            let paginationInfo = $('.pagination-info');

            if (pagination) {
                paginationInfo.html(
                    `Page ${pagination.current_page} of ${pagination.last_page}, showing ${pagination.per_page} records out of ${pagination.total} total, starting on record ${pagination.first_item}, ending on ${pagination.last_item}.`
                );

                // Clear previous pagination and add new pagination
                paginationWrapper.empty();

                // Previous Page Button
                if (pagination.current_page > 1) {
                    paginationWrapper.append(`
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" onclick="loadData('', '', ${pagination.current_page - 1})">
                        <i class="fa-solid fa-angle-left"></i>
                    </a>
                </li>
            `);
                } else {
                    paginationWrapper.append(`
                <li class="page-item disabled">
                    <span class="page-link"><i class="fa-solid fa-angle-left"></i></span>
                </li>
            `);
                }

                // Page Number Links
                for (let i = 1; i <= pagination.last_page; i++) {
                    paginationWrapper.append(`
                <li class="page-item ${i === pagination.current_page ? 'active' : ''}">
                    <a class="page-link" href="javascript:void(0)" onclick="loadData('', '', ${i})">${i}</a>
                </li>
            `);
                }

                // Next Page Button
                if (pagination.current_page < pagination.last_page) {
                    paginationWrapper.append(`
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" onclick="loadData('', '', ${pagination.current_page + 1})">
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                </li>
            `);
                } else {
                    paginationWrapper.append(`
                <li class="page-item disabled">
                    <span class="page-link"><i class="fa-solid fa-angle-right"></i></span>
                </li>
            `);
                }
            } else {
                console.error('Pagination data is undefined or malformed.');
            }
        }

        // no record found
        function noRecordFound() {
            $('tbody').append(`
                <tr>
                    <td colspan="6" class="text-center">No records found</td>
                </tr>
            `);
        }

        // delete content
        function deleteContent(id) {
            const deleteUrl = '{{ route("admin.cms.delete", ":id") }}'.replace(':id', id);

            Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url:  deleteUrl,
                            type: 'GET',
                            success: function(response) {
                                if (response.success) {
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: "Your feild has been deleted.",
                                        icon: "success"
                                    }).then(() => {
                                        location.reload();
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.log(error);
                            }
                        });
                    }
                });
        }

        // apply filter
        $('#filter-cms').on('click', function() {
            let name = $('#cms-name').val();
            let date = $('#datepicker').val();
            loadData(name, date);
        });
        //reset filter
        function removeFilter() {
            $('#cms-name').val('');
            $('#datepicker').val('');
            loadData();
        }
    </script>
@endpush
