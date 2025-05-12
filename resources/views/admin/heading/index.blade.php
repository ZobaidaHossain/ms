@extends('admin.layout.main')

@section('title', 'Heading Manage')

@push('css')
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/custom_dt_custom.css') }}">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
@endpush

@section('content')
    <div class="row layout-top-spacing">
        <div class="col-lg-12 col-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <table id="style-3" class="table style-3 table-hover">
                        <thead>
                            <tr>
                                <th class="text-center checkbox-column">#</th>
                                <th class="text-center">Title</th>  <th class="text-center">Title English</th>
                                <th>Subtitle</th>   <th>Subtitle English</th>
                                <th>Link</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Status</th>
                                <th class="text-center dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($heading as $key => $heading)
                                <tr>
                                    <td class="text-center checkbox-column"> {{ $key + 1 }} </td>

                                    <td class="text-center">{{ $heading->title }}</td>  <td class="text-center">{{ $heading->title_en }}</td>

                                    <td>{{ $heading->subtitle }}</td>    <td>{{ $heading->subtitle_en }}</td>
                                    <td>{{$heading->link}}</td>


                                    <td class="text-center">
                                        <span><img src="{{ asset('storage/'.$heading->image) }}" style="width: 100%;" class="profile-img" alt="avatar"></span>
                                    </td>

                                    <td class="text-center">
                                        <span class="badge badge-{{ $heading->status ? 'primary' : 'danger' }}">
                                            {{ $heading->status ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>

                                    <td class="text-center">
                                        <ul class="table-controls">
                                            <a href="{{ route('admin.heading.edit', $heading->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            {{-- <form action="{{ route('admin.heading.destroy', $heading->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"onclick="confirmDelete({{ $heading->id }})">Delete</button>
                                            </form> --}}
                                            <form id="deleteForm-{{ $heading->id }}" action="{{ route('admin.heading.destroy', $heading->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $heading->id }})">Delete</button>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
    <script>
        $('#style-3').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-sm-6'l><'col-sm-6'f>>>" +
                   "<'table-responsive'tr>" +
                   "<'dt--bottom-section d-sm-flex justify-content-between'i<'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<', "sNext": '>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": "Search:",
                "sLengthMenu": "Show _MENU_ entries"
            },
            "stripeClasses": [],
            "lengthMenu": [10, 15, 20],
            "pageLength": 10
        });
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endpush
