@extends('admin.layout.main')

@section('title', 'Social Manage')

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

                <form action="{{ isset($social) ? route('admin.social.update', $social->id) : route('admin.social.store') }}"
                    method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($social))
                @method('PUT')
            @endif


                    <div class="row p-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $social->title??'' }}"
                                    placeholder="enter social title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title_en">Title English</label>
                                <input type="text" class="form-control" id="title_en" name="title_en" value="{{ $social->title_en??'' }}"
                                    placeholder="enter social title english">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subtitle">Sub Title</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $social->subtitle??'' }}"
                                    placeholder="enter social sub title">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subtitle_en">Sub Title English</label>
                                <input type="text" class="form-control" id="subtitle_en" name="subtitle_en" value="{{ $social->subtitle_en??'' }}"
                                    placeholder="enter social sub title english">
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
