@extends('admin.layout.main')

@section('title', 'Goal Manage')

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

                <form action="{{ isset($goal) ? route('admin.goal.update', $goal->id) : route('admin.goal.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($goal))
                        @method('PUT')
                    @endif

                    <div class="p-4 row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="serial">Serial</label>
                                <input type="number" name="serial" id="serial" class="form-control"
                                    value="{{ old('serial', $goal->serial ?? '') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="serial_en">Serial English</label>
                                <input type="number" name="serial_en" id="serial_en" class="form-control"
                                    value="{{ old('serial_en', $goal->serial_en ?? '') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ old('title', $goal->title ?? '') }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_en">Title English</label>
                                <input type="text" name="title_en" id="title_en" class="form-control"
                                    value="{{ old('title_en', $goal->title_en ?? '') }}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <textarea name="subtitle" class="form-control" id="subtitle" rows="10">{{ $goal->subtitle??'' }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subtitle_en">Subtitle English</label>
                                <textarea name="subtitle_en" class="form-control" id="subtitle_en" rows="10">{{ $goal->subtitle_en??'' }}</textarea>
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
