@extends('admin.layout.main')

@section('title', 'notice Manage')

@push('css')
    <link href="{{ asset('assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
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

                <form action="{{ isset($notice) ? route('admin.notice.update', $notice->id) : route('admin.notice.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($notice))
                        @method('PUT')
                    @endif

                    <div class="p-4 row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="serial">Serial</label>
                                <input type="number" name="serial" id="serial" class="form-control"
                                    value="{{ old('serial', $notice->serial ?? '') }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="serial_en">Serial English</label>
                                <input type="number" name="serial_en" id="serial_en" class="form-control"
                                    value="{{ old('serial_en', $notice->serial_en ?? '') }}">
                            </div>
                        </div>



                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <textarea name="title" class="form-control" id="title" rows="10">{{ $notice->title??'' }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title_en">Title English</label>
                                <textarea name="title_en" class="form-control" id="title_en" rows="10">{{ $notice->title_en??'' }}</textarea>
                            </div>
                        </div>

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
                                    @if(isset($notice) && $notice->pdf)
                                        <iframe
                                            src="{{ asset('storage/' . $notice->pdf) }}"
                                            style="width: 100%; height: 300px;"
                                            frameborder="0">
                                        </iframe>
                                    @else
                                        <p class="text-muted" id="noPdfMessage">No PDF selected.</p>
                                    @endif
                                </div>
                            </div>
                        </div>


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
