@extends('admin.layout.main')

@section('title', 'notices Manage')

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
                                <th class="text-center checkbox-column"> #</th>
                                <th>Serial</th> <th>Serial English</th>
                                <th>Title</th>     <th>Title English</th>
                                <th>PDF</th>


                                <th class="text-center">Status</th>
                                <th class="text-center dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($notice as $key => $notice)
                             <tr>
                                <td class="text-center checkbox-column"> {{ $key+1 }} </td>
                                {{-- <td>{{$notice->serial}}</td> --}}


                            <td>{{ $notice->serial  }}</td>  <td>{{ $notice->serial_en  }}</td>
                                <td>{{ Str::limit($notice->title, 70, ' ...') }}</td> <td>{{ Str::limit($notice->title_en, 70, ' ...') }}</td>
                                <td class="text-center">
                                    @if($notice->pdf)
                                        <a href="{{ asset('storage/' . $notice->pdf) }}" target="_blank" class="btn btn-sm btn-info">View PDF</a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href=""><span class="shadow-none badge badge-{{ $notice->status == 'Active' ? 'primary':'danger' }}">{{ $notice->status }}</span></a>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <a href="{{ route('admin.notice.edit', $notice->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        {{-- <form id="delete-form-{{ $notice->id }}" action="{{ route('admin.notice.destroy', $notice->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $notice->id }})">Delete</button>
                                        </form>
                                         --}}
                                         <form id="deleteForm-{{ $notice->id }}" action="{{ route('admin.notice.destroy', $notice->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $notice->id }})">Delete</button>
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
    c3 = $('#style-3').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
    "<'table-responsive'tr>" +
    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
           "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [10, 15, 20, 50],
        "pageLength": 10
    });

    multiCheck(c3);
</script>
<!-- END PAGE LEVEL SCRIPTS -->
@endpush
