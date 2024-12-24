<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="contact-img">
                <img src="{{ asset('assets/images/contact.jpg') }}" alt="touch-illustration">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="section-title mb-60">
                <span>Contact</span>
                <h6>This could be the start of a profitable and mutually beneficial relationship!</h6>
            </div>
            <form id="contact-form" class="contact-form">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-field p-relative c-name mb-20">
                            <input type="text" name="name" placeholder="Name">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-field p-relative c-email mb-20">
                            <input name="email" type="email" placeholder="Email">
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-field p-relative c-name mb-20">
                            <input type="text" name="phone" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-field p-relative c-subject mb-20">
                            <span ><svg class="ct-icon" width="12" height="12" viewBox="0 0 15 15">
                                                <path d="M2.1,3.2l5.4,5.4l5.4-5.4L15,4.3l-7.5,7.5L0,4.3L2.1,3.2z"></path>
                                    </svg></span>
                            <select name="services" id="">
                                <option value="" selected disabled>Select Services
                                </option>
                                <option value="Revenue Optimization">Revenue Optimization</option>
                                <option value="Revenue Cycle Management">Revenue Cycle Management</option>
                                <option value="Medical Billing and Coding">Medical Billing and Coding
                                </option>
                                <option value="Practice Performance Analysis">Practice Performance Analysis
                                </option>
                                <option value="Crendentialing and Contracting">Crendentialing and
                                    Contracting
                                </option>
                                <option value="Internal Dispute Resolution (IDR)">Internal Dispute
                                    Resolution
                                    (IDR)
                                </option>
                            </select>
                            <span class="text-danger">
                                @error('services')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="contact-field p-relative c-message mb-45">
                            <textarea name="messages" id="message" cols="30" rows="10" placeholder="Write Message"></textarea>
                            <span class="text-danger">
                                @error('messages')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                        <div class="slider-btn">
                            <button type="submit" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Send
                                Message</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>

@push('js')
    <script>

        $('#contact-form').validate({
            rules: {
                name: 'required',
                email: {
                    email: true,
                    required: true
                },
                services: 'required',
                messages: 'required',
            },
            errorPlacement: function(error, element) {
                error.insertAfter(element);
                error.addClass('text-danger');
            },
            highlight: function(element) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element) {
                $(element).removeClass('is-invalid')
            },
            submitHandler: function(form, event) {
                event.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('contact-us.store') }}",
                    type: 'POST',
                    data: new FormData(form),
                    processData: false,
                    contentType: false,
                    success: function(result) {
                        swal.fire({
                            title: 'submitted',
                            text: result.message,
                            icon: 'success',
                        })
                        form.reset();
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                })
            }
        })

    </script>
@endpush
