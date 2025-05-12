@extends('admin.layout.main')

@section('title', 'Heading Manage')

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

                <form action="{{ isset($heading) ? route('admin.heading.update', $heading->id) : route('admin.heading.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($heading))
                        @method('PUT')
                    @endif

                    <div class="p-4 row">

                        <!-- Title -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ old('title', $heading->title ?? '') }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_en">Title English</label>
                                <input type="text" name="title_en" id="title_en" class="form-control"
                                    value="{{ old('title_en', $heading->title_en ?? '') }}">
                            </div>
                        </div>

                        <!-- Subtitle -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <input type="text" name="subtitle" id="subtitle" class="form-control"
                                    value="{{ old('subtitle', $heading->subtitle ?? '') }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="subtitle_en">Subtitle English</label>
                                <input type="text" name="subtitle_en" id="subtitle_en" class="form-control"
                                    value="{{ old('subtitle_en', $heading->subtitle_en ?? '') }}">
                            </div>
                        </div>

                        <!-- Link -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="url" name="link" id="link" class="form-control"
                                    value="{{ old('link', $heading->link ?? '') }}">
                            </div>
                        </div>

                        <!-- File Upload -->
                        <div class="col-md-12">
                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                <label>Upload (Single File) <a href="javascript:void(0)"
                                        class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file"  name="image"  class="custom-file-container__custom-file__custom-file-input"
                                        accept="image/*">
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                                <div class="custom-file-container__image-preview">
                                    @if(isset($heading) && $heading->image)
                                        <img id="currentImage" src="{{ asset('storage/' . $heading->image) }}" alt="Current Image" style="max-width: 100px; max-height: 100px;">
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="submit" class="mt-4 mb-4 btn btn-primary" value="Submit">
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
        // Initialize file upload
        var firstUpload = new FileUploadWithPreview('myFirstImage');
    </script>
    <!-- END PAGE LEVEL PLUGINS -->
@endpush
