@extends('admin.layout.layout')
@section('content')
    <div class="content-wrapper">
        @include('admin.includes.page_header' , ['page_name' => 'banner' ,
        'breadcrumb_link' =>  route('admin.dashboard')  , 'breadcrumb_item' =>'banner' ])

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('alert_messages')
                        <div class="card">
                            <div class="card-header">
                                @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1)
                                    <a class="card-title float-right" href="{{ route('admin.banners.create') }}">
                                        <button class="btn btn-primary"> Add banner</button>
                                    </a>
                                @endif
                            </div>
                            <div class="card-body">
                                <table id="banner_table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.no.</th>
                                            <th>Image</th>
                                            {{-- <th>Title</th> --}}
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Link</th>
                                            <th>Sort</th>
                                            @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1)
                                                <th>Status</th>
                                            @endif
                                            <th>Created At </th>
                                            <th>Updated At </th>
                                            @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1)
                                                <th>Action</th>
                                            @endif

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banners as $banner)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/front/images/banners/'.$banner->image) }}" alt="" srcset="" width="100px" height="80px">
                                                    {{-- {{ $banner->image }}</td> --}}
                                                <td>{!! $banner->title !!}</td>
                                                {{-- <td>{{ $banner->alt }}</td> --}}
                                                <td>{{ $banner->type }}</td>
                                                <td>{{ $banner->link }}</td>
                                                <td>{{ $banner->sort }}</td>

                                                {{-- restrict this feature is subadmin has no permissions --}}
                                                @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1)
                                                    <td>
                                                        @if ($banner->status == 1)
                                                            <a href="javascript:void(0)" class="updateBannerStatus"
                                                                style="color:none; !important"
                                                                id="banner-{{ $banner->id }}"
                                                                banner_id={{ $banner->id }} status="Active">
                                                                <i class="fa-solid fa-toggle-on status"
                                                                    data-toggle="tooltip" title="Active"
                                                                    banner_status="Active"></i>
                                                            </a>
                                                        @elseif($banner->status == 0)
                                                            <a href="javascript:void(0)" class="updateBannerStatus"
                                                                style="color: grey;  !important"
                                                                id="banner-{{ $banner->id }}"
                                                                banner_id={{ $banner->id }} status="Inactive">
                                                                <i class="fa-solid fa-toggle-off status"
                                                                    data-toggle="tooltip" title="Inactive"
                                                                    banner_status="Inactive"></i>
                                                            </a>

                                                        @endif

                                                </td>
                                        @endif
                                        <td>{{ date_time_format($banner->created_at) }}
                                        </td>
                                        <td> {{ date_time_format($banner->updated_at) }}
                                        </td>
                                        @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1)
                                            <td>

                                                <div class="d-flex justify-content-center align-items-center">
                                                    @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1)
                                                        <a href="{{ route('admin.banners.edit', $banner->id) }}"
                                                            data-toggle="tooltip" title="Edit">
                                                            <button class="btn btn-primary"><i
                                                                    class="fa-solid fa-pen"></i></button>
                                                        </a>
                                                    @endif
                                                    @if ($bannerModule['full_access'] == 1)
                                                        <a data-toggle="tooltip" title="Delete">
                                                            <button class="btn btn-danger ml-2 confirmDelete"
                                                                data-toggle="tooltip" title="Delete" module="banner"
                                                                module_id={{ $banner->id }}><i
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
            $('#banner_table').DataTable({
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
