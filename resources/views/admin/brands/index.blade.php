@extends('admin.layout.layout')
@section('content')
    <div class="content-wrapper">
        @include('admin.includes.page_header' , ['page_name' => 'Brand' ,
        'breadcrumb_link' =>  route('admin.dashboard')  , 'breadcrumb_item' =>'brand' ])

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('alert_messages')
                        <div class="card">
                            <div class="card-header">
                                @if ($brandModule['edit_access'] == 1 || $brandModule['full_access'] == 1)
                                    <a class="card-title float-right" href="{{ route('admin.brands.create') }}">
                                        <button class="btn btn-primary"> Add Brand</button>
                                    </a>
                                @endif
                            </div>
                            <div class="card-body">
                                <table id="brand_table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.no.</th>
                                            <th>Name</th>
                                            <th>URL</th>
                                            @if ($brandModule['edit_access'] == 1 || $brandModule['full_access'] == 1)
                                                <th>Status</th>
                                            @endif
                                            <th>Created At </th>
                                            <th>Updated At </th>
                                            @if ($brandModule['edit_access'] == 1 || $brandModule['full_access'] == 1)
                                                <th>Action</th>
                                            @endif

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brands as $brand)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $brand->brand_name }}</td>
                                                <td>{{ $brand->brand_url }}</td>

                                                {{-- restrict this feature is subadmin has no permissions --}}
                                                @if ($brandModule['edit_access'] == 1 || $brandModule['full_access'] == 1)
                                                    <td>
                                                        @if ($brand->status == 1)
                                                            <a href="javascript:void(0)" class="updateBrandStatus"
                                                                style="color:none; !important"
                                                                id="brand-{{ $brand->id }}"
                                                                brand_id={{ $brand->id }} status="Active">
                                                                <i class="fa-solid fa-toggle-on status"
                                                                    data-toggle="tooltip" title="Active"
                                                                    brand_status="Active"></i>
                                                            </a>
                                                        @elseif($brand->status == 0)
                                                            <a href="javascript:void(0)" class="updateBrandStatus"
                                                                style="color: grey;  !important"
                                                                id="brand-{{ $brand->id }}"
                                                                brand_id={{ $brand->id }} status="Inactive">
                                                                <i class="fa-solid fa-toggle-off status"
                                                                    data-toggle="tooltip" title="Inactive"
                                                                    brand_status="Inactive"></i>
                                                            </a>

                                                        @endif

                                                </td>
                                        @endif
                                        <td>{{ date_time_format($brand->created_at) }}
                                        </td>
                                        <td> {{ date_time_format($brand->updated_at) }}
                                        </td>
                                        @if ($brandModule['edit_access'] == 1 || $brandModule['full_access'] == 1)
                                            <td>

                                                <div class="d-flex justify-content-center align-items-center">
                                                    @if ($brandModule['edit_access'] == 1 || $brandModule['full_access'] == 1)
                                                        <a href="{{ route('admin.brands.edit', $brand->id) }}"
                                                            data-toggle="tooltip" title="Edit">
                                                            <button class="btn btn-primary"><i
                                                                    class="fa-solid fa-pen"></i></button>
                                                        </a>
                                                    @endif
                                                    @if ($brandModule['full_access'] == 1)
                                                        <a data-toggle="tooltip" title="Delete">
                                                            <button class="btn btn-danger ml-2 confirmDelete"
                                                                data-toggle="tooltip" title="Delete" module="brand"
                                                                module_id={{ $brand->id }}><i
                                                                    class="fa-solid fa-trash-can"></i></button>
                                                        </a>
                                                    @endif
                                                </div>
                                            </td>
                                        @endif
                                        </tr>
                                        @endforeach
                                        </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('script')
    <script>
        $(function() {
            //   $("#cms_page_table").DataTable({
            //     "responsive": true, "lengthChange": false, "autoWidth": false,
            //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            //   }).buttons().container().appendTo('#cms_page_table_wrapper .col-md-6:eq(0)');
            $('#brand_table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                // "autoWidth": true,
                // "responsive": true,
            });
        });
    </script>
@endpush
