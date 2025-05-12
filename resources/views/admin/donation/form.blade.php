@extends('admin.layout.main')

@section('title', 'donation Manage')

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

                <form action="{{ isset($donation) ? route('admin.donation.update', $donation->id) : route('admin.donation.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($donation))
                        @method('PUT')
                    @endif

                    <div class="p-4 row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ old('title', $donation->title ?? '') }}">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_en">Title English</label>
                                <input type="text" name="title_en" id="title_en" class="form-control"
                                    value="{{ old('title_en', $donation->title_en ?? '') }}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="10">{{ $donation->description??'' }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description_en">Description English</label>
                                <textarea name="description_en" class="form-control" id="description_en" rows="10">{{ $donation->description_en??'' }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="account_number">Account Number</label>
                                <textarea name="account_number" class="form-control" id="account_number" rows="10">{{ $donation->account_number??'' }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="account_number_en">Account Number English</label>
                                <textarea name="account_number_en" class="form-control" id="account_number_en" rows="10">{{ $donation->account_number_en??'' }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="branch_name">Branch Name</label>
                                <textarea name="branch_name" class="form-control" id="branch_name" rows="10">{{ $donation->branch_name??'' }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="branch_name_en">Branch Name English</label>
                                <textarea name="branch_name_en" class="form-control" id="branch_name_en" rows="10">{{ $donation->branch_name_en??'' }}</textarea>
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
