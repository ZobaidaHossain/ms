@extends('admin.layout.main')

@section('title', 'gallery Management')

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

                <form action="{{ isset($gallery) ? route('admin.gallery.update', $gallery->id) : route('admin.gallery.store') }}"
                    method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($gallery))
                @method('PUT')
            @endif

                    <div class="row p-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $gallery->title ?? '') }}"
                                    placeholder="Enter gallery title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title_en">Title English</label>
                                <input type="text" class="form-control" id="title_en" name="title_en" value="{{ old('title_en', $gallery->title_en ?? '') }}"
                                    placeholder="Enter gallery title english">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sub_title">Sub Title</label>
                                <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ old('sub_title', $gallery->sub_title ?? '') }}"
                                    placeholder="Enter gallery sub_title">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sub_title_en">Sub Title English</label>
                                <input type="text" class="form-control" id="sub_title_en" name="sub_title_en" value="{{ old('sub_title_en', $gallery->sub_title_en ?? '') }}"
                                    placeholder="Enter gallery sub_title english">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="">-- Select a category --</option>
                                    <option value="প্রশিক্ষণ"
                                        {{ old('category', $gallery->category ?? '') == 'প্রশিক্ষণ' ? 'selected' : '' }}>
                                        প্রশিক্ষণ
                                    </option>
                                    <option value="জনসচেতনতামূলক"
                                        {{ old('category', $gallery->category ?? '') == 'জনসচেতনতামূলক' ? 'selected' : '' }}>
                                        জনসচেতনতামূলক
                                    </option>
                                    <option value="আর্থিক সহায়তা"
                                    {{ old('category', $gallery->category ?? '') == 'আর্থিক সহায়তা' ? 'selected' : '' }}>
                                    আর্থিক সহায়তা
                                </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="category_en">Category English</label>
                                <select name="category_en" id="category_en" class="form-control">
                                    <option value="">-- Select a category --</option>
                                    <option value="Training"
                                        {{ old('category_en', $gallery->category_en ?? '') == 'Training' ? 'selected' : '' }}>
                                        Training
                                    </option>
                                    <option value="Public Awareness"
                                        {{ old('category_en', $gallery->category_en ?? '') == 'Public Awareness' ? 'selected' : '' }}>
                                        Public Awareness
                                    </option>
                                    <option value="Financial Assistance"
                                    {{ old('category_en', $gallery->category_en ?? '') == 'Financial Assistance' ? 'selected' : '' }}>
                                    Financial Assistance
                                </option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="10">{{ old('description', $gallery->description ?? '') }}
                                </textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description_en">Description English</label>
                                <textarea name="description_en" class="form-control" id="description_en" rows="10">{{ old('description_en', $gallery->description_en ?? '') }}
                                </textarea>
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
                                    @if(isset($gallery) && $gallery->image)
                                        <img id="currentImage" src="{{ asset('storage/' . $gallery->image) }}" alt="Current Image" style="max-width: 100px; max-height: 100px;">
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
