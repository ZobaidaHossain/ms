@extends('admin.layout.main')

@section('title', 'project Manage')

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

                <form action="{{ isset($project) ? route('admin.project.update', $project->id) : route('admin.project.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($project))
                        @method('PUT')
                    @endif



                    <div class="row p-4">


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="5" placeholder="Enter project for description">{{ $project->description ?? '' }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description_en">Description English</label>
                                <textarea class="form-control" id="description_en" name="description_en" rows="5" placeholder="Enter project for description english">{{ $project->description_en ?? '' }}</textarea>
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
        // Initialize CKEditor for all textareas without custom toolbar
        CKEDITOR.replace('description');
        CKEDITOR.replace('description_en');
    </script>
@endpush
