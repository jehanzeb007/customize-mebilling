@extends('layout.app')
@section('content')
    <div class=" default-height">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Blog</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Content</a></li>
                </ol>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="filter cm-content-box box-primary">
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
                                    <div class="col-xl-3 col-xxl-6 col-sm-6">
                                        <input type="text" class="form-control mb-3" id="exampleFormControlInput1"
                                            placeholder="Name">
                                    </div>
                                    {{-- <div class="col-xl-3 col-xxl-6 col-sm-6">
                                        <select class="default-select form-control mb-3 dashboard-select-2 w-100">
                                            <option selected="">Select Status</option>
                                            <option value="1">Published</option>
                                            <option value="2">Draft</option>
                                            <option value="3">Trash</option>
                                            <option value="4">Private</option>
                                            <option value="5">Pending</option>
                                        </select>
                                    </div> --}}
                                    <div class="col-xl-3 col-xxl-6 col-sm-6">
                                        <input class="form-control  mb-3" type="text" id="datepicker">
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-sm-6">
                                        <button class="btn btn-primary" title="Click here to Search" type="button"><i
                                                class="fa-solid fa-filter me-1"></i>Filter</button>
                                        <button class="btn btn-danger light" title="Click here to remove filter"
                                            type="button">Remove Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <ul class="d-flex align-items-center flex-wrap">
                            <li><a href="{{ route('admin.blog.add-blog') }}" class="btn btn-primary ">Add Blog</a></li>
                            {{-- <li><a href="{{ route('admin.blog.blog-category') }}" class="btn btn-primary mx-1">Blog
                                    Category</a></li> --}}
                            {{-- <li><a href="blog-category.html" class="btn btn-primary mt-sm-0 mt-1">Add Blog Category</a></li> --}}
                        </ul>
                    </div>
                    <div class="filter cm-content-box box-primary">
                        <div class="content-title">
                            <div class="cpa">
                                <i class="fa-solid fa-file-lines me-1"></i>Blogs List
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
                                                <th class="text-black">Image</th>
                                                <th class="text-black">Date</th>
                                                <th class="text-black text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($blogs as $index => $blog)
                                                <tr id="row-{{ $blog->id }}">
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $blog->name }}</td>
                                                    <td>{{ $blog->slug }}</td>
                                                    <td>
                                                        @if ($blog->image)
                                                            <img src="{{ asset('storage/' . $blog->image) }}"
                                                                alt="{{ $blog->name }}" width="50">
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td>
                                                    <td>{{ $blog->created_at->format('Y-m-d H:i:s') }}</td>

                                                    <td class="text-end">
                                                        <a href="{{ route('admin.blog.edit', $blog->id) }}"
                                                            class="btn btn-warning btn-sm content-icon">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm content-icon delete-btn"
                                                            data-id="{{ $blog->id }}">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div
                                        class="d-flex align-items-center width-defult justify-content-xl-between justify-content-center flex-wrap py-3">
                                        <small>
                                            Page {{ $blogs->currentPage() }} of {{ $blogs->lastPage() }},
                                            showing {{ $blogs->count() }} records out of {{ $blogs->total() }} total,
                                            starting on record {{ $blogs->firstItem() }}, ending on
                                            {{ $blogs->lastItem() }}
                                        </small>

                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination my-2 my-md-0">
                                                {{-- Previous Page Link --}}
                                                @if ($blogs->onFirstPage())
                                                    <li class="page-item disabled">
                                                        <span class="page-link"><i
                                                                class="fa-solid fa-angle-left"></i></span>
                                                    </li>
                                                @else
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $blogs->previousPageUrl() }}"><i
                                                                class="fa-solid fa-angle-left"></i></a>
                                                    </li>
                                                @endif

                                                {{-- Pagination Links --}}
                                                @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                                    <li
                                                        class="page-item {{ $page == $blogs->currentPage() ? 'active' : '' }}">
                                                        <a class="page-link"
                                                            href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @endforeach

                                                {{-- Next Page Link --}}
                                                @if ($blogs->hasMorePages())
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $blogs->nextPageUrl() }}"><i
                                                                class="fa-solid fa-angle-right"></i></a>
                                                    </li>
                                                @else
                                                    <li class="page-item disabled">
                                                        <span class="page-link"><i
                                                                class="fa-solid fa-angle-right"></i></span>
                                                    </li>
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
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


    <script src="{{ asset('assets/vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        $(function() {
            $("#datepicker").datepicker({
                autoclose: true,
                todayHighlight: true
            }).datepicker('update', new Date());

        });
    </script>

    <script>
        $(document).ready(function() {
            // Click handler for the delete button
            $('.delete-btn').click(function(event) {
                event.preventDefault(); // Prevent the default behavior

                var blogId = $(this).data('id'); // Get the blog ID

                // Show SweetAlert confirmation popup
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
                        // Proceed with AJAX request if confirmed
                        $.ajax({
                            url: `/admin/blog/delete/${blogId}`, // URL to the delete route
                            type: 'DELETE', // Use DELETE HTTP method
                            data: {
                                _token: '{{ csrf_token() }}', // CSRF token
                                _method: 'DELETE' // Method override for DELETE
                            },
                            success: function(response) {
                                if (response.success) {
                                    // Remove the blog row from the table
                                    $('#row-' + blogId).remove();

                                    // Show success alert
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: "Your file has been deleted.",
                                        icon: "success"
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.log(error); // Log the error for debugging
                            }
                        });
                    }
                });
            });
        });
    </script>




    <script>
        $(document).ready(function() {
            // Filter button functionality
            $('.btn-primary').click(function() {
                var nameFilter = $('#exampleFormControlInput1').val().toLowerCase(); // Get the name filter
                var dateFilter = $('#datepicker').val(); // Get the date filter

                // Loop through each row in the table
                $('.table tbody tr').each(function() {
                    var rowName = $(this).find('td:nth-child(2)').text()
                        .toLowerCase(); // Get the name from the row (2nd column)
                    var rowDate = $(this).find('td:nth-child(5)')
                        .text(); // Get the date from the row (5th column)

                    // Check if the row matches the filter criteria
                    var matchesName = rowName.includes(nameFilter);
                    var matchesDate = rowDate.includes(dateFilter);

                    // Show or hide the row based on the filter
                    if (matchesName && (matchesDate || dateFilter === "")) {
                        $(this).show(); // Show row if it matches filter
                    } else {
                        $(this).hide(); // Hide row if it doesn't match filter
                    }
                });
            });

            // Remove Filter button functionality
            $('.btn-danger').click(function() {
                // Reset the filter inputs
                $('#exampleFormControlInput1').val('');
                $('#datepicker').val('');

                // Show all rows in the table
                $('.table tbody tr').show();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Filter button functionality
            $('.btn-primary').click(function() {
                var nameFilter = $('#exampleFormControlInput1').val().toLowerCase(); // Get the name filter
                var dateFilter = $('#datepicker').val(); // Get the date filter

                // Loop through each row in the table
                $('#your-table-id tbody tr').each(function() {
                    var rowName = $(this).find('td:nth-child(2)').text()
                        .toLowerCase(); // Get the name from the row (2nd column)
                    var rowDate = $(this).find('td:nth-child(5)')
                        .text(); // Get the date from the row (5th column)

                    // Check if the row matches the filter criteria
                    var matchesName = rowName.includes(nameFilter);
                    var matchesDate = rowDate.includes(dateFilter);

                    // Show or hide the row based on the filter
                    if (matchesName && (matchesDate || dateFilter === "")) {
                        $(this).show(); // Show row if it matches filter
                    } else {
                        $(this).hide(); // Hide row if it doesn't match filter
                    }
                });
            });

            // Remove Filter button functionality
            $('.btn-danger').click(function() {
                // Reset the filter inputs
                $('#exampleFormControlInput1').val('');
                $('#datepicker').val('');

                // Show all rows in the table
                $('#your-table-id tbody tr').show();
            });
        });
    </script>
@endpush
