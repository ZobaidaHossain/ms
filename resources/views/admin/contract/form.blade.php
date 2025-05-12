@extends('admin.layout.main')

@section('title', 'contract Manage')

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
                <form action="{{ isset($contract) ? route('admin.contract.update', $contract->id) : route('admin.contract.store') }}"
                    method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($contract))
                @method('PUT')
            @endif

                    <div class="row p-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="link">Google Maps Link</label>
                                <input type="text" class="form-control" id="link" name="link" value="{{ $contract->link??'' }}"
                                    placeholder="enter Google maps link">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $contract->email??'' }}"
                                    placeholder="enter email ">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $contract->address??'' }}"
                                    placeholder="enter address ">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address_en">Address English</label>
                                <input type="text" class="form-control" id="address_en" name="address_en" value="{{ $contract->address_en??'' }}"
                                    placeholder="enter address english">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="number_en">Number English</label>
                                <input type="text" class="form-control" id="number_en" name="number_en" value="{{ $contract->number_en??'' }}"
                                    placeholder="enter contract Number English">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="number_bn">Number Bangla</label>
                                <input type="text" class="form-control" id="number_bn" name="number_bn" value="{{ $contract->number_bn??'' }}"
                                    placeholder="enter contract Number Bangla">
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
