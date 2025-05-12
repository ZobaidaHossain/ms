@extends('admin.layout.main')

@section('title', 'introduction Manage')

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

                <form action="{{ isset($introduction) ? route('admin.introduction.update', $introduction->id) : route('admin.introduction.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($introduction))
                        @method('PUT')
                    @endif



                    <div class="row p-4">


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="aboutus">About Us</label>
                                <textarea class="form-control" id="aboutus" name="aboutus" rows="5" placeholder="Enter introduction for about us">{{ $introduction->aboutus ?? '' }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="memory">Background Memory</label>
                                <textarea class="form-control" id="memory" name="memory" rows="5" placeholder="Enter introduction for memory">{{ $introduction->memory ?? '' }}</textarea>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="backdrop">Backdrop</label>
                                <textarea class="form-control" id="backdrop" name="backdrop" rows="5" placeholder="Enter introduction for backdrop English">{{ $introduction->backdrop ?? '' }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="aboutus_en">About Us English</label>
                                <textarea class="form-control" id="aboutus_en" name="aboutus_en" rows="5" placeholder="Enter introduction for about us english">{{ $introduction->aboutus_en ?? '' }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="memory_en">Background Memory English</label>
                                <textarea class="form-control" id="memory_en" name="memory_en" rows="5" placeholder="Enter introduction for memory English">{{ $introduction->memory_en ?? '' }}</textarea>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="backdrop_en">Backdrop English</label>
                                <textarea class="form-control" id="backdrop_en" name="backdrop_en" rows="5" placeholder="Enter introduction for backdrop English">{{ $introduction->backdrop_en ?? '' }}</textarea>
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
        // First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage');
        // Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage');
    </script>

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script>
        // Initialize CKEditor for all textareas without custom toolbar
        CKEDITOR.replace('aboutus');
        CKEDITOR.replace('memory');
        CKEDITOR.replace('backdrop');
        CKEDITOR.replace('aboutus_en');
        CKEDITOR.replace('memory_en');
        CKEDITOR.replace('backdrop_en');
    </script>
@endpush
