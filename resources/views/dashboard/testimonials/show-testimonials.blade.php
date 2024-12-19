@extends('layout.app')
@section('content')
    <div class="default-height">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Testimonials</a></li>
                </ol>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="filter cm-content-box box-primary">
                        <div class="content-title">
                            <div class="cpa">
                                <i class="fa-solid fa-comments me-1"></i> Testimonials List
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
                                                <th class="text-black">position</th>
                                                <th class="text-black">Testimonial</th>
                                                <th class="text-black">Image</th>
                                                <th class="text-black text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($testimonials as $index => $testimonial)
                                                <tr id="row-{{ $testimonial->id }}">
                                                    <td>{{ $index + 1}}</td>
                                                    <td>{{ $testimonial->name }}</td>
                                                    <td>{{ $testimonial->position }}</td>
                                                    <td>{{ strip_tags($testimonial->testimonial) }}</td>
                                                    <td>
                                                        @if ($testimonial->image)
                                                            <img src="{{ asset('storage/' . $testimonial->image) }}"
                                                                alt="{{ $testimonial->name }}" width="50">
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td>
                                                    <td class="text-end">
                                                        <!-- Edit button -->
                                                        <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}"
                                                            class="btn btn-warning btn-sm content-icon">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>

                                                        <!-- Delete button -->
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm content-icon delete-btn"
                                                            data-id="{{ $testimonial->id }}">
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
                                            Page {{ $testimonials->currentPage() }} of {{ $testimonials->lastPage() }},
                                            showing {{ $testimonials->count() }} records out of
                                            {{ $testimonials->total() }} total,
                                            starting on record {{ $testimonials->firstItem() }}, ending on
                                            {{ $testimonials->lastItem() }}
                                        </small>

                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination my-2 my-md-0">
                                                {{-- Previous Page Link --}}
                                                @if ($testimonials->onFirstPage())
                                                    <li class="page-item disabled">
                                                        <span class="page-link"><i
                                                                class="fa-solid fa-angle-left"></i></span>
                                                    </li>
                                                @else
                                                    <li class="page-item">
                                                        <a class="page-link"
                                                            href="{{ $testimonials->previousPageUrl() }}"><i
                                                                class="fa-solid fa-angle-left"></i></a>
                                                    </li>
                                                @endif

                                                {{-- Pagination Links --}}
                                                @foreach ($testimonials->getUrlRange(1, $testimonials->lastPage()) as $page => $url)
                                                    <li
                                                        class="page-item {{ $page == $testimonials->currentPage() ? 'active' : '' }}">
                                                        <a class="page-link"
                                                            href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @endforeach

                                                {{-- Next Page Link --}}
                                                @if ($testimonials->hasMorePages())
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $testimonials->nextPageUrl() }}"><i
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        $(document).ready(function() {
            // Click handler for the delete button
            $('.delete-btn').click(function(event) {
                event.preventDefault(); // Prevent the default behavior

                var testimonialId = $(this).data('id'); // Get the testimonial ID

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
                            url: `/admin/testimonials/delete/${testimonialId}`, // Correct the URL to match route
                            type: 'DELETE', // Use DELETE HTTP method
                            data: {
                                _token: '{{ csrf_token() }}', // CSRF token
                                _method: 'DELETE' // Method override for DELETE
                            },
                            success: function(response) {
                                if (response.success) {
                                    // Remove the testimonial row from the table
                                    $('#row-' + testimonialId).remove();

                                    // Show success alert
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: "Your testimonial has been deleted.",
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
@endpush
