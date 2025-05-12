@extends('admin.layout.main')

@section('title', 'Service Manage')

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

                <form action="{{ isset($service) ? route('admin.service.update', $service->id) : route('admin.service.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($service))
                        @method('PUT')
                    @endif

                    <div class="p-4 row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ old('title', $service->title ?? '') }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title_en">Title English</label>
                                <input type="text" name="title_en" id="title_en" class="form-control"
                                    value="{{ old('title_en', $service->title_en ?? '') }}">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="icon_class">Icon Class</label>
                                <select name="icon_class" id="icon_class" class="form-control">
                                    <option value="">-- Select an Icon --</option>
                                    <option value="bx bx-chalkboard"
                                        {{ old('icon_class', $service->icon_class ?? '') == 'bx bx-chalkboard' ? 'selected' : '' }}>
                                        Tv Icon
                                    </option>
                                    <option value="bx bx-target-lock"
                                        {{ old('icon_class', $service->icon_class ?? '') == 'bx bx-target-lock' ? 'selected' : '' }}>
                                        Focus Icon
                                    </option>
                                    <option value="bx bx-donate-heart"
                                    {{ old('icon_class', $service->icon_class ?? '') == 'bx bx bx-donate-heart' ? 'selected' : '' }}>
                                    Free Medical Icon
                                </option>
                                <option value="bx bx-money"
                                {{ old('icon_class', $service->icon_class ?? '') == 'bx bx-money' ? 'selected' : '' }}>
                                Money Icon
                            </option>
                            <option value="bx bx-cog"
                            {{ old('icon_class', $service->icon_class ?? '') == 'bx bx-cog' ? 'selected' : '' }}>
                            Setting Icon
                        </option>
                        <option value="bx bx-shower"
                        {{ old('icon_class', $service->icon_class ?? '') == 'bx bx-shower' ? 'selected' : '' }}>
                        Sanitize Icon
                    </option>
                    <option value="bx bx-card"
                    {{ old('icon_class', $service->icon_class ?? '') == 'bx bx bx-card' ? 'selected' : '' }}>
                    Card Icon
                </option>
                <option value="bx bx-slideshow"
                {{ old('icon_class', $service->icon_class ?? '') == 'bx bx bx-slideshow' ? 'selected' : '' }}>
                Side Show Icon
            </option>
            <option value="bx bx-group"
            {{ old('icon_class', $service->icon_class ?? '') == 'bx bx bx-group' ? 'selected' : '' }}>
            Groupe People Icon
        </option>
                                </select>
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
