@extends('admin.layout.main')

@section('title', 'Slider Manage')

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

                <form action="{{ isset($bgMemory) ? route('admin.bg-memory.update', $bgMemory->id) : route('admin.bg-memory.store') }}"
                    method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($bgMemory))
                @method('PUT')
            @endif

                    <div class="p-4 row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $bgMemory->title??'' }}"
                                    placeholder="enter background title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title_en">Title English</label>
                                <input type="text" class="form-control" id="title_en" name="title_en" value="{{ $bgMemory->title_en??'' }}"
                                    placeholder="enter background title english">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>

                                <textarea name="description" class="form-control" id="description" rows="5">{{  $bgMemory->description ?? '' }}</textarea>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description_en">Description English</label>
                                <textarea name="description_en" class="form-control" id="description_en" rows="5">{{  $bgMemory->description_en ?? '' }}</textarea>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description_more">Details Information</label>
                                <textarea class="form-control" id="description_more" name="description_more" rows="5" placeholder="Enter details description">{{ $bgMemory->description_more ?? '' }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description_more_en">Details Information In English</label>
                                <textarea class="form-control" id="description_more_en" name="description_more_en" rows="5" placeholder="Enter details description english">{{ $bgMemory->description_more_en ?? '' }}</textarea>
                            </div>
                        </div>


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
                                    @if(isset($bgMemory) && $bgMemory->image)
                                        <img id="currentImage" src="{{ asset('storage/' . $bgMemory->image) }}" alt="Current Image" style="max-width: 100px; max-height: 100px;">
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
     <!-- CKEditor -->
     <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
     <script>
         CKEDITOR.replace('description');
         CKEDITOR.replace('description_more');
         CKEDITOR.replace('description_en');
         CKEDITOR.replace('description_more_en');
     </script>
@endpush
