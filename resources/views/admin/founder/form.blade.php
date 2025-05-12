@extends('admin.layout.main')

@section('title', 'Founder Management')

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

                <form action="{{ isset($founder) ? route('admin.founder.update', $founder->id) : route('admin.founder.store') }}"
                    method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($founder))
                @method('PUT')
            @endif

                    <div class="row p-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $founder->title ?? '') }}"
                                    placeholder="Enter founder title">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title_en">Title English</label>
                                <input type="text" class="form-control" id="title_en" name="title_en" value="{{ old('title_en', $founder->title_en ?? '') }}"
                                    placeholder="Enter founder title english">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="10">{{ old('description', $founder->description ?? '') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description_en">Description English</label>
                                <textarea name="description_en" class="form-control" id="description_en" rows="10">{{ old('description_en', $founder->description_en ?? '') }}</textarea>
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
                                    @if(isset($founder) && $founder->image)
                                        <img id="currentImage" src="{{ asset('storage/' . $founder->image) }}" alt="Current Image" style="max-width: 100px; max-height: 100px;">
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary" value="Save">
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
        // Image upload functionality
        var firstUpload = new FileUploadWithPreview('myFirstImage');
    </script>
    <!-- END PAGE LEVEL PLUGINS -->
@endpush
