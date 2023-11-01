@extends('panel.layouts.app')
@section('inner-pagecss')
    <style>
        .feature-image-preview {
            position: relative;
            display: inline-block;
        }

        .feature-image-preview img,
        .company-image-preview img,
        {
        display: block;
        max-width: 100%;
        height: auto;
        border: 2px solid #f2f2f2;
        padding: 10px;
        margin-top: 12px;
        }

        .cancel-icon {
            position: absolute;
            top: 0px;
            right: -18px;
            padding: 0px 10px;
            font-size: 25px;
            border: #f2f2f2 solid 2px;
            border-radius: 50px;
            background: #f2f2f2;
            cursor: pointer;
        }

        .relative-icon {
            position: absolute;
            top: 0px;
            right: -18px;
            padding: 0px 10px;
            font-size: 25px;
            border: #f2f2f2 solid 2px;
            border-radius: 50px;
            background: #f2f2f2;
            cursor: pointer;
        }

        .company-cancel-icon {
            position: absolute;
            top: 76px;
            left: -10px;
            padding: 0px 10px;
            font-size: 25px;
            border: #f2f2f2 solid 2px;
            border-radius: 50px;
            background: #f2f2f2;
            cursor: pointer;
        }

        .relative-cancel-icon {
            position: absolute;
            top: -10px;
            right: -15px;
            padding: 0px 10px;
            font-size: 25px;
            border: #f2f2f2 solid 2px;
            border-radius: 50px;
            background: #f2f2f2;
            cursor: pointer;
        }

        /* Optional: Add styling for the image container */
        .image-container {
            position: relative;
            display: inline-block;
            margin: 10px;
            border: 2px solid black;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid bg-white" id="kt_content">
        <div class="card-header border-0 pt-6">
            <!--begin::Card toolbar-->
            <div class="card-toolbar d-flex justify-content-between">
                <h1 class="anchor fw-bolder mb-5 px-4">Ads Posted</h1>
            </div>
            <!--end::Card toolbar-->
            <hr>
        </div>
        <div id="kt_content_container" class="container-xxl">
            <div class="modal-body">
                <form action="{{ route('ad-post.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                        data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px"
                        style="">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold mb-2">Title</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="Title..."
                                name="title" value="{{ $adpost->title ?? '' }}" required>
                            <input type="hidden" name="id" value="{{ $adpost->id ?? '' }}">
                            <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="row">
                            <!--end::Input group-->
                            <div class="d-flex flex-column col-4 mb-7 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">
                                    <span class="required">Type</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="type" aria-label="Select a Type" data-control="select2"
                                    data-placeholder="Select a Type..."
                                    class="form-select form-select-solid fw-bolder select2-hidden-accessible" tabindex="-1"
                                    aria-hidden="true" id="getTypeid" required>
                                    <option value="">Select a Type...</option>
                                    @foreach ($type as $data)
                                        <option value="{{ $data->id }}" data-id="{{ $data->id }}"
                                            {{ $adpost->type_id == $data->id ? 'selected' : '' }}>
                                            {{ ucwords($data->name) }}</option>
                                    @endforeach
                                </select>
                                <!--end::Input-->
                            </div>

                            <!--end::Input group-->
                            <div class="d-flex flex-column col-4 mb-7 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">
                                    <span class="required">Category</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="category" aria-label="Select a Category" data-control="select2"
                                    data-placeholder="Select a Category..."
                                    class="form-select form-select-solid fw-bolder select2-hidden-accessible" tabindex="-1"
                                    aria-hidden="true" id="categorybyType" required>
                                    <option value="">Select a Category...</option>
                                </select>

                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <div class="d-flex flex-column col-4 mb-7 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">
                                    <span class="required">Model</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="model" aria-label="Select a Model" data-control="select2"
                                    data-placeholder="Select a Model..."
                                    class="form-select form-select-solid fw-bolder select2-hidden-accessible" tabindex="-1"
                                    aria-hidden="true" id="ModelbyType" required>
                                    <option value="">Select a Model...</option>
                                </select>

                                <!--end::Input-->
                                <!--end::Input-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="d-flex flex-column col-4 mb-7 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold mb-2">Minimum Age
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" min="0" max="99" class="form-control form-control-solid"
                                    placeholder="Minimum Age" name="age" value="{{ $adpost->age ?? '' }}" required>
                                <!--end::Input-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="d-flex flex-column col-4 mb-7 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold mb-2">Region
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="Select Region" name="area_name"
                                    value="{{ $adpost->area_name ?? '' }}" required>
                                <!--end::Input-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>

                            <div class="d-flex flex-column col-4 mb-7 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">
                                    <span class="required">City</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="city" aria-label="Select a City" data-control="select2"
                                    data-placeholder="Select a City..."
                                    class="form-select form-select-solid fw-bolder select2-hidden-accessible" tabindex="-1"
                                    aria-hidden="true" required>
                                    <option value="">Select a City...</option>
                                    @foreach ($city as $citydata)
                                        <option value="{{ $citydata->id }}"
                                            {{ $adpost->city_id == $citydata->id ? 'selected' : '' }}>
                                            {{ $citydata->name }}</option>
                                    @endforeach
                                </select>
                                <!--end::Input-->
                            </div>
                        </div>

                        <div class="row">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column col-4 mb-7 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold mb-2">Price Per Day
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" class="form-control form-control-solid" placeholder="Price Per Day"
                                    name="price_per_day" value="{{ $adpost->price_per_day ?? '' }}" required>
                                <!--end::Input-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-column col-4 mb-7 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">Price Per Week
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" class="form-control form-control-solid"
                                    placeholder="Price Per Week" name="price_per_week"
                                    value="{{ $adpost->price_per_week ?? '' }}" required>
                                <!--end::Input-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-column col-4 mb-7 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class=" fs-6 fw-bold mb-2">Price Per Month
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" class="form-control form-control-solid"
                                    placeholder="Price Per Month" name="price_per_month"
                                    value="{{ $adpost->price_per_month ?? '' }}" required>
                                <!--end::Input-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->
                        </div>


                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">Description</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea type="text" class="form-control form-control-solid" placeholder="" name="description" required>{{ $adpost->description ?? '' }}</textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">Feature Image</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="file" class="form-control form-control-solid" placeholder=""
                                name="feature_image" value="{{ asset('public/adpost/features/image/' . $adpost->feature_image) }}">
                            <div class="feature-image-preview"></div>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">Relative Images</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="file" class="form-control form-control-solid" placeholder="" name="images[]"
                                multiple accept="image/jpeg, image/png, image/jpg">
                            <div class="relative-images-preview"></div>
                            @if($adpost->postImages)
                                @foreach($adpost->postImages->get() as $image)
                                    {{-- @dump($image) --}}
                                    <div class="image-container">
                                        <img src="{{ asset('public/adpost/images/'.$image->images) }}" width="200" height="200">
                                        <span class="relative-cancel-icon">&times;</span>
                                    </div>
                                @endforeach
                            @endif
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">Contact By</span>
                            </label>
                            <div class="form-check form-check-custom form-check-solid">
                                @php
                                    $contactBy = json_decode($adpost->contactby);
                                @endphp
                                {{-- @dd($contactBy[0]) --}}
                                <input class="form-check-input" type="checkbox" value="phone"
                                    {{ isset($contactBy[0]) && $contactBy[0] == 'phone' ? 'checked' : '' }}
                                    name="contactMethod[]" />
                                <label class="fw-bold form-check-label  mx-4">
                                    Phone Number
                                </label>
                                <input class="form-check-input" type="checkbox" value="chat"
                                    {{ isset($contactBy[1]) && $contactBy[1] == 'chat' ? 'checked' : '' }}
                                    name="contactMethod[]" />
                                <label class="fw-bold form-check-label mx-4">
                                    Whatsapp Chat
                                </label>
                            </div>
                            <div class="alert" id="contact-alert"></div>
                        </div>

                        <!--begin::Billing toggle-->
                        <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                            href="#kt_modal_add_customer_billing_info" role="button" aria-expanded="false"
                            aria-controls="kt_customer_view_details">Company Information
                            <span class="ms-2 rotate-180">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <!--end::Billing toggle-->
                        <!--begin::Billing form-->
                        <div id="kt_modal_add_customer_billing_info" class="collapse show">
                            <!--begin::Input group-->
                            <div class="row">
                                <div class="d-flex flex-column col-4 mb-7 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder=""
                                        name="company_name" value="{{ $adpost->company_name ?? '' }}">
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column col-4 mb-7 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">Logo</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="file" class="form-control form-control-solid" placeholder=""
                                        name="company_logo" value="">
                                    <div class="company-image-preview"></div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <div class="d-flex flex-column col-4 mb-7 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">
                                        <span class="required">With Driver</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="driver" class="form-select form-select-solid fw-bolder" required>
                                        <option value="">-- Chose One --</option>
                                        <option value="Yes" {{ $adpost->driver == 'Yes' ? 'selected' : '' }}>Yes
                                        </option>
                                        <option value="No" {{ $adpost->driver == 'No' ? 'selected' : '' }}>No
                                        </option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <!--end::Billing form-->
                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center pt-5">
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script_page')
    <script>
         @php
            $imageURL = '/public/adpost/features/image/'.$adpost->feature_image;
            $logoURL = '/public/company/logo/'.$adpost->compnay_logo;
        @endphp
        $(document).ready(function() {

            function loadDataBasedOnType(dataAttrValue) {
                $.ajax({
                    url: '/category-type/' + dataAttrValue,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        var options = '';
                        $.each(response, function(key, value) {
                            options += '<option value="' + value.id + '">' + value.name +
                                '</option>';
                        });
                        $('#categorybyType').html(options);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });

                $.ajax({
                    url: '/model-type/' + dataAttrValue,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        var options = '';
                        $.each(response, function(key, value) {
                            options += '<option value="' + value.id + '">' + value
                                .name +
                                '</option>';
                        });
                        $('#ModelbyType').html(options);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }

            // Get the selected value on document load and load data
            var selectedOption = $('#getTypeid').find(':selected');
            var dataAttrValue = selectedOption.data('id');
            loadDataBasedOnType(dataAttrValue);




            $('#getTypeid').on('change', function() {
                var selectedOption = $(this).find(':selected');
                var dataAttrValue = selectedOption.data('id');
                console.log('Data attribute value:', dataAttrValue);
                loadDataBasedOnType(dataAttrValue);
            });

            var imageURL = '{!! $imageURL !!}';

            if (imageURL) {
                var imagePreview = $('.feature-image-preview');
                var image = $('<img>');
                image.attr('src', imageURL);
                image.attr('width', '200');
                image.attr('height', '200');
                var container = $('<div class="image-container"></div>');
                container.append(image);

                // Create the cancel button
                var cancelIcon = $('<span class="cancel-icon">&times;</span>');
                cancelIcon.on('click', function() {
                    $('input[name="feature_image"]').val('');
                    container.remove();
                });

                container.append(cancelIcon);

                imagePreview.append(container);
                // console.log('Image URL:', imageURL);
                // console.log('Image Element:', image);
                // console.log('Image Container:', container);

            }


            var logoURL = '{!! $logoURL !!}';
            if (logoURL) {
                var imagePreview = $('.company-image-preview');
                var image = $('<img>');
                image.attr('src', logoURL);
                image.attr('width', '200');
                image.attr('height', '200');
                var container = $('<div class="image-container"></div>');
                container.append(image);

                // Create the cancel button
                var cancelIcon = $('<span class="cancel-icon">&times;</span>');
                cancelIcon.on('click', function() {
                    $('input[name="feature_image"]').val('');
                    container.remove();
                });

                container.append(cancelIcon);

                imagePreview.append(container);
                // console.log('Image URL:', imageURL);
                // console.log('Image Element:', image);
                // console.log('Image Container:', container);

            }


        });

        // Listen for change event on the file input
        $('input[name="feature_image"]').on('change', function() {
            var input = $(this)[0];
            var imagePreview = $('.feature-image-preview');

            // Clear previous image preview
            imagePreview.html('');

            // Check if files are selected
            if (input.files && input.files.length > 0) {
                // Read and display each selected image
                for (var i = 0; i < input.files.length; i++) {
                    var reader = new FileReader();

                    // Read the file
                    reader.onload = function(e) {
                        // Create an image element and set the source, width, and height
                        var image = $('<img>');
                        image.attr('src', e.target.result);
                        image.attr('width', '200'); // Set the desired width
                        image.attr('height', '200'); // Set the desired height

                        // Create a container for the image and cancel icon
                        var container = $('<div class="image-container"></div>');
                        container.append(image);

                        // Create the cancel icon and attach a click event
                        var cancelIcon = $('<span class="cancel-icon">&times;</span>');
                        cancelIcon.on('click', function() {
                            // Clear the file input value, remove the image container, and hide the cancel button
                            $('input[name="feature_image"]').val('');
                            container.remove();
                            cancelBtn.hide();
                        });
                        container.append(cancelIcon);

                        // Append the image container to the preview container
                        imagePreview.append(container);

                        cancelBtn.show();
                    }

                    // Read the selected file as a data URL
                    reader.readAsDataURL(input.files[i]);
                }
            }
        });

        $('input[name="company_logo"]').on('change', function() {
            var input = $(this)[0];
            var imagePreview = $('.company-image-preview');

            // Clear previous image preview
            imagePreview.html('');

            // Check if files are selected
            if (input.files && input.files.length > 0) {
                // Read and display each selected image
                for (var i = 0; i < input.files.length; i++) {
                    var reader = new FileReader();

                    // Read the file
                    reader.onload = function(e) {
                        // Create an image element and set the source, width, and height
                        var image = $('<img>');
                        image.attr('src', e.target.result);
                        image.attr('width', '200'); // Set the desired width
                        image.attr('height', '200'); // Set the desired height

                        // Create a container for the image and cancel icon
                        var container = $('<div class="image-container"></div>');
                        container.append(image);

                        // Create the cancel icon and attach a click event
                        var cancelIcon = $('<span class="company-cancel-icon">&times;</span>');
                        cancelIcon.on('click', function() {
                            // Clear the file input value, remove the image container, and hide the cancel button
                            $('input[name="feature_image"]').val('');
                            container.remove();
                            cancelBtn.hide();
                        });
                        container.append(cancelIcon);

                        // Append the image container to the preview container
                        imagePreview.append(container);

                        cancelBtn.show();
                    }

                    // Read the selected file as a data URL
                    reader.readAsDataURL(input.files[i]);
                }
            }
        });

        // Your JavaScript code
        $('input[name="images[]"]').on('change', function() {
            var input = $(this)[0];
            var imagePreview = $('.relative-images-preview');

            // Clear previous image previews
            imagePreview.html('');

            // Check if files are selected
            if (input.files && input.files.length > 0) {
                // Store the selected files in a variable
                var selectedFiles = input.files;

                // Read and display each selected image
                for (var i = 0; i < selectedFiles.length; i++) {
                    var reader = new FileReader();
                    var file = selectedFiles[i];

                    // Closure to capture the file information
                    reader.onload = (function(file) {
                        return function(e) {
                            var image = $('<img>');
                            image.attr('src', e.target.result);
                            image.attr('width', '200'); // Set the desired width
                            image.attr('height', '200'); // Set the desired height

                            var container = $('<div class="image-container"></div>');
                            container.append(image);

                            var cancelIcon = $('<span class="relative-cancel-icon">&times;</span>');
                            cancelIcon.on('click', function() {
                                // Remove the image container when the cancel icon is clicked
                                container.remove();

                                // Create a new FileList without the removed file
                                var newFileList = new DataTransfer();
                                for (var j = 0; j < selectedFiles.length; j++) {
                                    if (selectedFiles[j] !== file) {
                                        newFileList.items.add(selectedFiles[j]);
                                    }
                                }

                                // Create a new input element with the updated FileList
                                var newInput = $(
                                    '<input type="file" class="form-control form-control-solid" placeholder="" name="images[]" multiple>'
                                );
                                newInput[0].files = newFileList.files;

                                // Replace the original input with the new input
                                $(input).replaceWith(newInput);
                            });

                            container.append(cancelIcon);
                            imagePreview.append(container);
                        };
                    })(file);

                    // Read the selected file as a data URL
                    reader.readAsDataURL(file);
                }
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Get both checkboxes
            const checkboxes = document.querySelectorAll('input[name="contactMethod"]');
            const contactAlert = document.getElementById('contact-alert');

            // Add an event listener to the checkboxes
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener("change", function() {
                    // Check if at least one checkbox is checked
                    const atLeastOneChecked = Array.from(checkboxes).some(checkbox => checkbox
                        .checked);

                    // Show an error message if no checkbox is checked
                    if (!atLeastOneChecked) {
                        contactAlert.innerHTML =
                            "<p class='text-danger'>Please select at least one contact method.</p>";
                    } else {
                        contactAlert.innerHTML = ""; // Clear the error message
                    }
                });
            });
        });
    </script>
@endsection
