@extends('admin.layout.main')

@section('title', 'Audience Manage')

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

                <form action="{{ isset($audience) ? route('admin.audience.update', $audience->id) : route('admin.audience.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($audience))
                        @method('PUT')
                    @endif


                    <div class="row p-4">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="serial">Serial</label>
                                <input type="number" class="form-control" id="serial" name="serial" value="{{ $audience->serial ?? '' }}"
                                    placeholder="Enter audience serial">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $audience->title??'' }}"
                                    placeholder="enter audience title">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="5" placeholder="Enter audience description">{{ $audience->description ?? '' }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="serial_en">Serial English</label>
                                <input type="number" class="form-control" id="serial_en" name="serial_en" value="{{ $audience->serial_en ?? '' }}"
                                    placeholder="Enter audience serial english">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title_en">Title English</label>
                                <input type="text" class="form-control" id="title_en" name="title_en" value="{{ $audience->title_en??'' }}"
                                    placeholder="enter audience title english">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description_en">Description English</label>
                                <textarea class="form-control" id="description_en" name="description_en" rows="5" placeholder="Enter audience description english">{{ $audience->description_en ?? '' }}</textarea>
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
        CKEDITOR.replace('description');
        CKEDITOR.replace('description_en');
    </script>
@endpush
