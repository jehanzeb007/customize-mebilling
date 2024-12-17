@extends('layout.app')

@section('content')
    <div class="default-height">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Slider</a></li>
                </ol>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <form
                        action="{{ isset($slider) ? route('admin.slider.editslider.post', $slider->id) : route('admin.slider.addslider.post') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (isset($slider))
                            @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control"
                                value="{{ old('slug', $slider->slug ?? '') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="images">Images</label>
                            <input type="file" name="images[]" id="images" class="form-control" multiple>

                            <div id="imagePreview" class="mt-3 d-flex flex-wrap" style="gap: 10px; cursor: pointer;">
                                @if (isset($slider) && $slider->image_paths)
                                    @php
                                        $images = json_decode($slider->image_paths, true) ?? [];
                                    @endphp
                                    @foreach ($images as $image)
                                        <div class="image-container position-relative m-2" data-id="{{ $loop->index }}">
                                            <input type="hidden" name="uploaded_images[]" value="{{ $image }}">
                                            <img src="{{ Storage::url($image) }}" class="img-thumbnail"
                                                style="max-width: 100px;">
                                            @if (!empty($slider))
                                                <button type="button"
                                                    class="delete-existing-image btn btn-danger btn-sm position-absolute top-0 end-0"
                                                    data-image="{{ $image }}" data-slider-id="{{ $slider->id }}"
                                                    style="font-size: 18px; background-color: #f44336; border: none; color: white; width: 25px; height: 25px; border-radius: 50%; padding: 0; text-align: center; top: -5px; right: -5px;">
                                                    &times;
                                                </button>
                                            @endif
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            {{ isset($slider) ? 'Update' : 'Add' }} Slider
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


    <script>
        $(document).ready(function() {
            function updateImagePaths() {
                let imagePaths = [];
                $('#imagePreview .image-container img').each(function() {
                    imagePaths.push($(this).attr('src').replace('/storage/', ''));
                });
                $('#imagePaths').val(JSON.stringify(imagePaths));
            }

            var deleteButton = '';
            @if (!empty($slider))
                deleteButton = `<button type="button" class="delete-new-image btn btn-danger btn-sm position-absolute top-0 end-0"
                            style="font-size: 18px; background-color: #f44336; border: none; color: white; width: 25px; height: 25px; border-radius: 50%; padding: 0; text-align: center; top: -5px; right: -5px;">
                            &times;
                        </button>`;
            @endif

            // Handle new image preview
            $('#images').on('change', function(event) {
                const files = event.target.files;
                for (let i = 0; i < files.length; i++) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const container = $('<div>', {
                            'class': 'image-container position-relative m-2',
                            'html': `
                        <img src="${e.target.result}" class="img-thumbnail" style="max-width: 100px;">
                        ${deleteButton}
                    `
                        });
                        $('#imagePreview').append(container);
                        updateImagePaths();
                    }
                    reader.readAsDataURL(files[i]);
                }
            });

            // Delete existing image
            $(document).on('click', '.delete-existing-image', function() {
                const $container = $(this).closest('.image-container');
                const image = $(this).data('image');
                const sliderId = $(this).data('slider-id');
                $container.remove();
                $('#imagePreview').append('<input type="hidden" value="' + image +
                    '" name="deleted_images[]">');
                return false;
                $.ajax({
                    url: `/admin/slider/delete-image/${sliderId}`,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}',
                        image_url: image
                    },
                    success: function(response) {
                        if (response.success) {
                            $container.remove();
                            updateImagePaths();
                        }
                    }
                });
            });

            // Delete new image preview
            $(document).on('click', '.delete-new-image', function() {
                $(this).closest('.image-container').remove();
                updateImagePaths();
            });

            // Sort images
            $('#imagePreview').sortable({
                update: function(event, ui) {
                    updateImagePaths();
                }
            });

            // Initial update of image paths
            updateImagePaths();
        });
    </script>
@endpush
