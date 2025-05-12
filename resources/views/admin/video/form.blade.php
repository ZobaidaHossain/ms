@extends('admin.layout.main')

@section('title', 'video Management')

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

                <form action="{{ isset($video) ? route('admin.video.update', $video->id) : route('admin.video.store') }}"
                    method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($video))
                @method('PUT')
            @endif

                    <div class="row p-4">
{{--  --}}
<div class="col-md-12">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $video->title ?? '') }}"
            placeholder="Enter Video title">
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="title_en">Title English</label>
        <input type="text" class="form-control" id="title_en" name="title_en" value="{{ old('title_en', $video->title_en ?? '') }}"
            placeholder="Enter video title english">
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="sub_title">Sub Title</label>
        <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ old('sub_title', $video->sub_title ?? '') }}"
            placeholder="Enter video sub_title">
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <label for="sub_title_en">Sub Title English</label>
        <input type="text" class="form-control" id="sub_title_en" name="sub_title_en" value="{{ old('sub_title_en', $video->sub_title_en ?? '') }}"
            placeholder="Enter video sub_title english">
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" rows="10">{{ old('description', $video->description ?? '') }}
        </textarea>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <label for="description_en">Description English</label>
        <textarea name="description_en" class="form-control" id="description_en" rows="10">{{ old('description_en', $video->description_en ?? '') }}
        </textarea>
    </div>
</div>
                        {{--  --}}

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="">-- Select a category --</option>
                                    <option value="প্রশিক্ষণ"
                                        {{ old('category', $video->category ?? '') == 'প্রশিক্ষণ' ? 'selected' : '' }}>
                                        প্রশিক্ষণ
                                    </option>
                                    <option value="জনসচেতনতামূলক"
                                        {{ old('category', $video->category ?? '') == 'জনসচেতনতামূলক' ? 'selected' : '' }}>
                                        জনসচেতনতামূলক
                                    </option>
                                    <option value="আর্থিক সহায়তা"
                                    {{ old('category', $video->category ?? '') == 'আর্থিক সহায়তা' ? 'selected' : '' }}>
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
                                        {{ old('category', $video->category_en ?? '') == 'Training' ? 'selected' : '' }}>
                                        Training
                                    </option>
                                    <option value="Public Awarenes"
                                        {{ old('category', $video->category_en ?? '') == 'Public Awarenes' ? 'selected' : '' }}>
                                        Public Awarenes
                                    </option>
                                    <option value="Financial Assistance"
                                    {{ old('category', $video->category_en ?? '') == 'Financial Assistance' ? 'selected' : '' }}>
                                    Financial Assistance
                                </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="custom-file-container" data-upload-id="myFirstVideo">
                                <label class="d-block">Upload (Single Video)
                                    <a href="javascript:void(0)" class="custom-file-container__image-clear text-danger" title="Clear Video" id="clearVideo">x</a>
                                </label>
                                <label class="custom-file">
                                    <input
                                        type="file"
                                        name="video"
                                        id="videoInput"
                                        class="custom-file-input"
                                        accept="video/*">
                                    <span class="custom-file-label" for="videoInput">Choose Video File</span>
                                </label>

                                <div class="custom-file-container__image-preview mt-3" id="videoPreviewContainer">
                                    <!-- Show existing video if available -->
                                    @if(isset($video) && $video->video)
                                        <video id="currentVideo" controls style="max-width: 100%; max-height: 300px;">
                                            <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @elseif(old('video'))
                                        <!-- Show video preview if an old input exists -->
                                        <video id="currentVideo" controls style="max-width: 100%; max-height: 300px;">
                                            <source src="{{ asset('storage/' . old('video')) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @else
                                        <p class="text-muted" id="noVideoMessage">No video selected.</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                      

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="link">Youtube Link</label>
                                <input type="text" class="form-control" id="link" name="link" value="{{ old('link', $video->link ?? '') }}"
                                    placeholder="Enter Youtube Link">
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
    <script>
        // Get references to the DOM elements
        const videoInput = document.getElementById('videoInput');
        const videoPreviewContainer = document.getElementById('videoPreviewContainer');
        const clearVideoButton = document.getElementById('clearVideo');
        const noVideoMessage = document.getElementById('noVideoMessage');

        // Handle video file selection
        videoInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                // Remove any existing preview video
                videoPreviewContainer.innerHTML = '';

                // Create a video element
                const videoElement = document.createElement('video');
                videoElement.controls = true;
                videoElement.style.maxWidth = '100%';
                videoElement.style.maxHeight = '300px';

                // Set the video source to the selected file
                const fileURL = URL.createObjectURL(file);
                videoElement.src = fileURL;

                // Add the video element to the preview container
                videoPreviewContainer.appendChild(videoElement);
            }
        });

        // Clear the selected video and reset the preview
        clearVideoButton.addEventListener('click', function () {
            videoInput.value = ''; // Clear the file input
            videoPreviewContainer.innerHTML = '<p class="text-muted">No video selected.</p>'; // Reset the preview
        });
    </script>
@endpush
