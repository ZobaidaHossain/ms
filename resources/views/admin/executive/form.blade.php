@extends('admin.layout.main')

@section('title', 'executive Manage')

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

                <form action="{{ isset($executive) ? route('admin.executive.update', $executive->id) : route('admin.executive.store') }}"
                    method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($executive))
                @method('PUT')
            @endif

                    <div class="p-4 row">
                        <div class="col-md-12">
                            <div class="form-group">

                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"value="{{ old('name', $executive->name ?? '') }}"
                                    placeholder="enter executive name">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">

                                <label for="name_en">Name English</label>
                                <input type="text" class="form-control" id="name_en" name="name_en"value="{{ old('name_en', $executive->name_en ?? '') }}"
                                    placeholder="enter executive english name">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">

                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation"value="{{ old('designation', $executive->designation ?? '') }}"
                                    placeholder="enter executive member designation">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">

                                <label for="designation_en">Designation English</label>
                                <input type="text" class="form-control" id="designation_en" name="designation_en"value="{{ old('designation_en', $executive->designation_en ?? '') }}"
                                    placeholder="enter executive member designation english">
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
                                    @if(isset($executive) && $executive->image)
                                        <img id="currentImage" src="{{ asset('storage/' . $executive->image) }}" alt="Current Image" style="max-width: 100px; max-height: 100px;">
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
@endpush
