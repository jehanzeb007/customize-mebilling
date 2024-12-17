@extends('layout.app')

@section('content')
    <div class="default-height">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Slugs and Keywords</a></li>
                </ol>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="filter cm-content-box box-primary">
                        <div class="content-title">
                            <div class="cpa">
                                <i class="fa-solid fa-file-lines me-1"></i> Slugs and Keywords List
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
                                                <th class="text-black">Description</th>
                                                <th class="text-black text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($slugKeywords as $index => $slugKeyword)
                                                <tr id="row-{{ $slugKeyword->id }}">
                                                    <td>{{ $slugKeywords->firstItem() + $index }}</td>
                                                    <td>{{ $slugKeyword->slug }}</td>
                                                    <td>{{ strip_tags($slugKeyword->description) }}</td>
                                                    <td class="text-end">
                                                        <a href="{{ route('admin.slugs-keywords.edit', $slugKeyword->id) }}"
                                                            class="btn btn-warning btn-sm">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-danger btn-sm delete-btn"
                                                            data-id="{{ $slugKeyword->id }}">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination Links -->
                                <div class="d-flex justify-content-center">
                                    {{ $slugKeywords->links() }} <!-- Add pagination links here -->
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
        $(document).ready(function() {
            // Click handler for delete button
            $('.delete-btn').click(function(event) {
                event.preventDefault(); // Prevent default behavior of button click
                var slugKeywordId = $(this).data('id'); // Get the ID from the data-id attribute

                // Show SweetAlert confirmation popup
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Send the DELETE request using method override
                        $.ajax({
                            url: `/admin/slugs-keywords/delete/${slugKeywordId}`,
                            type: 'POST', // POST method to override with DELETE
                            data: {
                                _token: '{{ csrf_token() }}', // CSRF token
                                _method: 'DELETE', // Method override to DELETE
                            },
                            success: function(response) {
                                if (response.success) {
                                    // Remove the row from the table
                                    $('#row-' + slugKeywordId).remove();
                                    Swal.fire('Deleted!',
                                        'Your record has been deleted.', 'success');
                                } else {
                                    Swal.fire('Error!', response.message ||
                                        'Could not delete the record.', 'error');
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error('Error:',
                                    error); // Log the error for debugging
                                Swal.fire('Error!',
                                    'There was an issue with the deletion.', 'error'
                                );
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
