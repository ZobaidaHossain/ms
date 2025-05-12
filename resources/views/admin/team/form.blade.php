@extends('admin.layout.main')

@section('title', 'Team Manage')

@push('css')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
@endpush

@section('content')
    <div class="row layout-top-spacing">
        <div class="col-lg-12 col-12">
            <div class="card">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form action="{{ isset($team) ? route('admin.team.update', $team->id) : route('admin.team.store') }}"
                    method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($team))
                @method('PUT')
            @endif

                    <div class="p-4 row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="serial">Serial</label>
                                <input type="text" name="serial" id="serial" class="form-control"
                                    value="{{ old('serial', $team->serial ?? '') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="serial_en">Serial English</label>
                                <input type="text" name="serial_en" id="serial_en" class="form-control"
                                    value="{{ old('serial_en', $team->serial_en ?? '') }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">

                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"value="{{ old('name', $team->name ?? '') }}"
                                    placeholder="enter team name">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">

                                <label for="name_en">Name English</label>
                                <input type="text" class="form-control" id="name_en" name="name_en"value="{{ old('name_en', $team->name_en ?? '') }}"
                                    placeholder="enter team name english">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">

                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation"value="{{ old('designation', $team->designation ?? '') }}"
                                    placeholder="enter team member designation">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">

                                <label for="designation_en">Designation English</label>
                                <input type="text" class="form-control" id="designation_en" name="designation_en"value="{{ old('designation_en', $team->designation_en ?? '') }}"
                                    placeholder="enter team member designation english">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                <label>Upload (Single File)
                                    <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a>
                                </label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="image" id="imageInput" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                                <div class="custom-file-container__image-preview">
                                    @if(isset($team) && $team->image)
                                        <img id="currentImage" src="{{ asset('storage/' . $team->image) }}" alt="Current Image" style="max-width: 100px; max-height: 100px;">
                                    @endif
                                </div>
                            </div>
                        </div>

{{-- pdf --}}
<div class="col-md-12">
    <div class="custom-file-container" data-upload-id="pdfUpload">
        <label>Upload PDF
            <a href="javascript:void(0)" class="custom-file-container__image-clear text-danger" id="clearPdf" title="Clear File">x</a>
        </label>
        <label class="custom-file">
            <input type="file" name="pdf" id="pdfInput" class="custom-file-input" accept="application/pdf">
            <span class="custom-file-label" for="pdfInput">Choose PDF File</span>
        </label>
        <div class="custom-file-container__image-preview mt-3" id="pdfPreviewContainer">
            <!-- Show existing PDF if available -->
            @if(isset($team) && $team->pdf)
                <iframe
                    src="{{ asset('storage/' . $team->pdf) }}"
                    style="width: 100%; height: 300px;"
                    frameborder="0">
                </iframe>
            @else
                <p class="text-muted" id="noPdfMessage">No PDF selected.</p>
            @endif
        </div>
    </div>
</div>

{{-- end pdf --}}

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary">
                            </div>
                        </div>


                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection


@push('js')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('plugins/file-upload/file-upload-with-preview.min.js') }}"></script>

    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
    <!-- END PAGE LEVEL PLUGINS -->
    <script>
        // Get references to DOM elements
        const pdfInput = document.getElementById('pdfInput');
        const pdfPreviewContainer = document.getElementById('pdfPreviewContainer');
        const clearPdfButton = document.getElementById('clearPdf');
        const noPdfMessage = document.getElementById('noPdfMessage');

        // Handle PDF file selection
        pdfInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file && file.type === 'application/pdf') {
                // Remove any existing preview content
                pdfPreviewContainer.innerHTML = '';

                // Create an iframe to display the PDF
                const iframe = document.createElement('iframe');
                iframe.src = URL.createObjectURL(file); // Generate a temporary URL for the selected file
                iframe.style.width = '100%';
                iframe.style.height = '300px';
                iframe.frameBorder = '0';

                // Add the iframe to the preview container
                pdfPreviewContainer.appendChild(iframe);
            } else {
                // If the selected file is not a PDF, show a message
                pdfPreviewContainer.innerHTML = '<p class="text-danger">Please select a valid PDF file.</p>';
            }
        });

        // Clear the selected PDF and reset the preview
        clearPdfButton.addEventListener('click', function () {
            pdfInput.value = ''; // Clear the file input
            pdfPreviewContainer.innerHTML = '<p class="text-muted">No PDF selected.</p>'; // Reset the preview
        });
    </script>
@endpush
