@extends('admin.layout.main')

@section('title', 'help Manage')

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

                <form action="{{ isset($help) ? route('admin.help.update', $help->id) : route('admin.help.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($help))
                        @method('PUT')
                    @endif

                    <div class="p-4 row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="foundation_name">Foundation Name</label>
                                <input type="text" name="foundation_name" id="foundation_name" class="form-control"
                                    value="{{ old('foundation_name', $help->foundation_name ?? '') }}">
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="account_number">Account Number</label>

                                <input type="text" name="account_number" id="account_number" class="form-control"
                                value="{{ old('account_number', $help->account_number ?? '') }}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <input type="text" name="bank_name" id="bank_name" class="form-control"
                                value="{{ old('bank_name', $help->bank_name ?? '') }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="branch">Branch Name</label>
                                <input type="text" name="branch" id="branch" class="form-control"
                                value="{{ old('branch', $help->branch ?? '') }}">
                            </div>
                        </div>

                        {{--  --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="foundation_name_en">Foundation Name English</label>
                                <input type="text" name="foundation_name_en" id="foundation_name_en" class="form-control"
                                    value="{{ old('foundation_name_en', $help->foundation_name_en ?? '') }}">
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="account_number_en">Account Number English</label>

                                <input type="text" name="account_number_en" id="account_number_en" class="form-control"
                                value="{{ old('account_number_en', $help->account_number_en ?? '') }}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="bank_name_en">Bank Name English</label>
                                <input type="text" name="bank_name_en" id="bank_name_en" class="form-control"
                                value="{{ old('bank_name_en', $help->bank_name_en ?? '') }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="branch_en">Branch Name English</label>
                                <input type="text" name="branch_en" id="branch_en" class="form-control"
                                value="{{ old('branch_en', $help->branch_en ?? '') }}">
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
