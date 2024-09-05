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
                                            <th>Section Name</th>
                                            <th>Section Type</th>
                                            <th>Image </th>
                                            {{-- <th>Title</th> --}}
                                            {{-- <th>Name</th> --}}
                                            
                                            <th>Link</th>
                                            <th>Alt Text</th>
                                            <th>Sort</th>
                                            {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                                <th>Status</th>
                                            {{-- @endif --}}
                                            <th>Created At </th>
                                            <th>Updated At </th>
                                            {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                                <th>Action</th>
                                            {{-- @endif --}}

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banners as $banner)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $banner->homepage_section->name }}</td>
                                                <td>{{ Str::ucfirst($banner->homepage_section->section_type ) }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/front/images/banners/'.$banner->image_url) }}" alt="" srcset="" width="100px" height="80px">
                                                    {{-- {{ $banner->image }}</td> --}}
                                                    <td>{{ Str::limit($banner->link_url,50 ,'...')   }}</td>
                                                <td>{{ $banner->alt_text }}</td>
                                                {{-- <td>{{ $banner->type }}</td> --}}
                                             
                                                <td>{{ $banner->display_order }}</td>

                                                {{-- restrict this feature is subadmin has no permissions --}}
                                                {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
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
                                        {{-- @endif --}}
                                        <td>{{ date_time_format($banner->created_at) }}
                                        </td>
                                        <td> {{ date_time_format($banner->updated_at) }}
                                        </td>
                                        {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                            <td>

                                                <div class="d-flex justify-content-center align-items-center">
                                                    {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                                        <a href="{{ route('admin.banners.edit', $banner->id) }}"
                                                            data-toggle="tooltip" title="Edit">
                                                            <button class="btn btn-primary"><i
                                                                    class="fa-solid fa-pen"></i></button>
                                                        </a>
                                                    {{-- @endif --}}
                                                    {{-- @if ($bannerModule['full_access'] == 1) --}}
                                                        <a data-toggle="tooltip" title="Delete">
                                                            <button class="btn btn-danger ml-2 confirmDelete"
                                                                data-toggle="tooltip" title="Delete" module="banner"
                                                                module_id={{ $banner->id }}><i
                                                                    class="fa-solid fa-trash-can"></i></button>
                                                        </a>
                                                    {{-- @endif --}}
                                                </div>
                                            </td>
                                        {{-- @endif --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
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
            $('#banner_table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                // "scrollX":true,
                // "columnDefs": [
                //     // { "width": "20%", "targets": 0 },  // Set the width of the first column
                //     { "width": "10px", "targets": 3 },  // Set the width of the second column
                // ]
                
            });
        });
    </script>
@endpush
