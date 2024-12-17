@extends('layout.app')
@section('content')
    <div class="default-height">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Sliders</a></li>
                </ol>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="filter cm-content-box box-primary">
                        <div class="content-title">
                            <div class="cpa">
                                <i class="fa-solid fa-image me-1"></i> Sliders List
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
                                                <th class="text-black">Slug</th>
                                                <th class="text-black">Image Count</th>
                                                <th class="text-black text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sliders as $index => $slider)
                                                <tr id="row-{{ $slider->id }}">
                                                    <!-- Display Serial Number -->
                                                    <td>{{ $index + 1 }}</td>

                                                    <!-- Display Slider Slug -->
                                                    <td>{{ $slider->slug }}</td>

                                                    <!-- Display Image Count -->
                                                    <td>{{ count(json_decode($slider->image_paths)) }}</td>

                                                    <!-- Actions: Edit and Delete buttons -->
                                                    <td class="text-end">

                                                        <a href="{{ route('admin.slider.editslider', $slider->id) }}"
                                                            class="btn btn-warning btn-sm content-icon">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>


                                                        <button type="button"
                                                            class="btn btn-danger btn-sm content-icon delete-btn"
                                                            data-id="{{ $slider->id }}">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                    <!-- Pagination Controls -->
                                    <div
                                        class="d-flex align-items-center width-defult justify-content-xl-between justify-content-center flex-wrap py-3">
                                        <small>
                                            Page {{ $sliders->currentPage() }} of {{ $sliders->lastPage() }},
                                            showing {{ $sliders->count() }} records out of
                                            {{ $sliders->total() }} total,
                                            starting on record {{ $sliders->firstItem() }}, ending on
                                            {{ $sliders->lastItem() }}
                                        </small>

                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination my-2 my-md-0">
                                                {{-- Previous Page Link --}}
                                                @if ($sliders->onFirstPage())
                                                    <li class="page-item disabled">
                                                        <span class="page-link"><i
                                                                class="fa-solid fa-angle-left"></i></span>
                                                    </li>
                                                @else
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $sliders->previousPageUrl() }}"><i
                                                                class="fa-solid fa-angle-left"></i></a>
                                                    </li>
                                                @endif

                                                {{-- Pagination Links --}}
                                                @foreach ($sliders->getUrlRange(1, $sliders->lastPage()) as $page => $url)
                                                    <li
                                                        class="page-item {{ $page == $sliders->currentPage() ? 'active' : '' }}">
                                                        <a class="page-link"
                                                            href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @endforeach

                                                {{-- Next Page Link --}}
                                                @if ($sliders->hasMorePages())
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $sliders->nextPageUrl() }}"><i
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

                var sliderId = $(this).data('id'); // Get the slider ID

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
                            url: `/admin/slider/delete-slider/${sliderId}`, // Adjust the URL to match your delete route
                            type: 'POST', // Use POST to send the request
                            data: {
                                _token: '{{ csrf_token() }}', // CSRF token
                                _method: 'DELETE' // Method override for DELETE
                            },
                            success: function(response) {
                                if (response.success) {
                                    // Remove the slider row from the table
                                    $('#row-' + sliderId).remove();

                                    // Show success alert
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: "Your slider has been deleted.",
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
