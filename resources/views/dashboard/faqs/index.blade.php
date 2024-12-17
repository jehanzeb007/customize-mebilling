@extends('layout.app')
@section('title', $title)
@section('content')
    <div class="container-fluid">
        <div class="page-titles d-flex align-items-center justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">FAQs</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Content</a></li>
            </ol>
            <a href="{{ route('admin.faqs.addFaq') }}" class="btn btn-primary">Add FAQs</a>
        </div>

        <div class="filter cm-content-box box-primary">
            <div class="content-title">
                <div class="cpa">
                    <i class="fa-solid fa-file-lines me-1"></i>FAQs List
                </div>
                <div class="tools">
                    <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
                </div>
            </div>
            <div class="cm-content-body form excerpt">
                <div class="card-body py-3">

                    <div class="table-responsive">
                        <table class="table table-striped table-condensed flip-content">
                            <thead>
                                <tr>
                                    <th class="text-black"></th>
                                    <th class="text-black">Question</th>
                                    <th class="text-black">Answer</th>
                                    <th class="text-black">Date</th>
                                    <th class="text-black text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="drag-container">
                                @if ($faqs->count() > 0)
                                    @foreach ($faqs as $key => $data)
                                        <tr id='row-{{ $data->id }}' class="drag-item">
                                            <td><img src="{{ asset('assets/images/drag.svg') }}" alt=""></td>
                                            <td>{{ $data->question }}</td>
                                            <td>{!! strip_tags($data->answer) !!}</td>

                                            <td>{{ $data->created_at->format('Y-m-d') }}</td>
                                            <td class="text-end">
                                                <a href="{{ route('admin.faqs.edit', $data->id) }}"
                                                    class="btn btn-warning btn-sm content-icon">
                                                    <i class="fa fa-edit" id='edit-{{ $data->id }}'></i>
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-sm content-icon"
                                                    onclick="deleteFaqs({{ $data->id }})">
                                                    <i class="fa fa-times" id='delete-{{ $data->id }}'></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="5">No Data</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
@push('js')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{ asset('assets/js/dashboard/cms.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.drag-container').sortable({
                items: '.drag-item',
                cursor: 'move',
                opacity: 0.7,
                placeholder: "sortable-placeholder",
                start: function(event, ui) {
                    ui.placeholder.height(ui.helper.outerHeight());
                },
                update: function(event, ui) {
                    sortUpdate();
                }
            });
        });

        function sortUpdate() {
            var sort_ids = $(".drag-container").sortable("toArray");
            $.ajax({
                url: "{{ route('admin.faqs.sort') }}",
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    order: sort_ids,
                },
                error: function(error) {
                    console.error();
                },
            })
        }

        function deleteFaqs(id) {
            const deleteUrl = '{{ route('admin.faqs.delete', ':id') }}';

            Swal.fire({
                    title: 'Are you sure',
                    text: 'You will not be able to recover this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: deleteUrl.replace(':id', id),
                            type: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}',
                                _method: 'DELETE'
                            },
                            success: function(response) {
                                if (response.success) {
                                    Swal.fire({
                                        title: 'Deleted!',
                                        text: 'Your feild has been deleted.',
                                        icon: 'success',
                                    }).then(() => {
                                        location.reload();
                                    })
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        })
                    }
                })
                .catch((error) => {
                    console.error(error);
                })
        }
    </script>
@endpush
