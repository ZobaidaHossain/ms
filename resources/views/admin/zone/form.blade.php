@extends('admin.layout.main')

@section('title', 'zone Management')

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

                <form action="{{ isset($zone) ? route('admin.zone.update', $zone->id) : route('admin.zone.store') }}"
                    method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($zone))
                @method('PUT')
            @endif

                    <div class="row p-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="5">{{ old('description', $zone->description ?? '') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description_en">Description English</label>
                                <textarea name="description_en" class="form-control" id="description_en" rows="5">{{ old('description_en', $zone->description_en ?? '') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="link"> Link</label>
                                <input type="text" class="form-control" id="link" name="link" value="{{old('link',$zone->link??'')  }}"
                                    placeholder="enter zone link">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image_title">Image title</label>
                                <textarea name="image_title" class="form-control" id="image_title" rows="5">{{ old('image_title', $zone->image_title ?? '') }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image_title_en">Image title English</label>
                                <textarea name="image_title_en" class="form-control" id="image_title_en" rows="5">{{ old('image_title_en', $zone->image_title_en ?? '') }}</textarea>
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
                                    @if(isset($zone) && $zone->image)
                                        <img id="currentImage" src="{{ asset('storage/' . $zone->image) }}" alt="Current Image" style="max-width: 100px; max-height: 100px;">
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
       <!-- CKEditor -->
       <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
       <script>
           CKEDITOR.replace('description');
           CKEDITOR.replace('description_en');
           CKEDITOR.replace('image_title');
           CKEDITOR.replace('image_title_en');
       </script>
@endpush
