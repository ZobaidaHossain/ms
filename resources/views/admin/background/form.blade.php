@extends('admin.layout.main')

@section('title', 'Background Manage')

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
                <form action="{{ isset($background) ? route('admin.background.update', $background->id) : route('admin.background.store') }}"
                    method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($background))
                @method('PUT')
            @endif

                    <div class="row p-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $background->title??'' }}"
                                    placeholder="enter background title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title_en">Title English</label>
                                <input type="text" class="form-control" id="title_en" name="title_en" value="{{ $background->title_en??'' }}"
                                    placeholder="enter background title">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sub_title">Sub Title</label>
                                <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ $background->sub_title??'' }}"
                                    placeholder="enter background sub title">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sub_title_en">Sub Title English</label>
                                <input type="text" class="form-control" id="sub_title_en" name="sub_title_en" value="{{ $background->sub_title_en??'' }}"
                                    placeholder="enter background sub title english">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="10">{{ $background->description??'' }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description_en">Description English</label>
                                <textarea name="description_en" class="form-control" id="description_en" rows="10">{{ $background->description_en??'' }}</textarea>
                            </div>
                        </div>


                        {{-- <div class="col-md-12">
                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                <label>Upload (Single File) <a href="javascript:void(0)"
                                        class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file"  name="image"  class="custom-file-container__custom-file__custom-file-input"
                                        accept="image/*">
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                                <div class="custom-file-container__image-preview"></div>
                            </div>
                        </div> --}}

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
