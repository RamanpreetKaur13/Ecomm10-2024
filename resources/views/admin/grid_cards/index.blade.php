@extends('admin.layout.layout')
@section('content')
    <div class="content-wrapper">
        @include('admin.includes.page_header', [
            'page_name' => 'Grid Cards',
            'breadcrumb_link' => route('admin.dashboard'),
            'breadcrumb_item' => 'grid-cards',
        ])

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('alert_messages')
                        <div class="card">
                            <div class="card-header">
                                {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                <a class="card-title float-right" href="{{ route('admin.grid-cards.create') }}">
                                    <button class="btn btn-primary"> Add grid card</button>
                                </a>
                                {{-- @endif --}}
                            </div>
                            <div class="card-body">
                                <table id="grid_card_table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.no.</th>
                                            <th>Section Type</th>
                                            <th>Image </th>
                                            <th>Link</th>
                                            <th>Title</th>
                                            <th>Sub Title</th>
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
                                        @if ($grids->isNotEmpty())
                                            @foreach ($grids as $grid)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $grid->homepage_section->name }}</td>
                                                    <td>
                                                        <img src="{{ asset('storage/front/images/gridCards/' . $grid->image_url) }}"
                                                            alt="" srcset="" width="100px" height="80px">
                                                        {{-- {{ $banner->image }} --}}</td>
                                                    <td>{{ Str::limit($grid->link_url, 50, '...') }}</td>
                                                    <td>{{ $grid->title }}</td>
                                                    <td>{{ $grid->subtitle }}</td>

                                                    <td>{{ $grid->display_order }}</td>

                                                    {{-- restrict this feature is subadmin has no permissions --}}
                                                    {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                                    <td>
                                                        @if ($grid->status == 1)
                                                            <a href="javascript:void(0)" class="updateGridStatus"
                                                                style="color:none; !important"
                                                                id="grid-{{ $grid->id }}"
                                                                grid_id={{ $grid->id }} status="Active">
                                                                <i class="fa-solid fa-toggle-on status"
                                                                    data-toggle="tooltip" title="Active"
                                                                    grid_status="Active"></i>
                                                            </a>
                                                        @elseif($grid->status == 0)
                                                            <a href="javascript:void(0)" class="updateGridStatus"
                                                                style="color: grey;  !important"
                                                                id="grid-{{ $grid->id }}"
                                                                grid_id={{ $grid->id }} status="Inactive">
                                                                <i class="fa-solid fa-toggle-off status"
                                                                    data-toggle="tooltip" title="Inactive"
                                                                    grid_status="Inactive"></i>
                                                            </a>
                                                        @endif

                                                    </td>
                                                    {{-- @endif --}}
                                                    <td>{{ date_time_format($grid->created_at) }}
                                                    </td>
                                                    <td> {{ date_time_format($grid->updated_at) }}
                                                    </td>
                                                    {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                                    <td>

                                                        <div class="d-flex justify-content-center align-items-center">
                                                            {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                                            <a href="{{ route('admin.grid-cards.edit', $grid->id) }}"
                                                                data-toggle="tooltip" title="Edit">
                                                                <button class="btn btn-primary"><i
                                                                        class="fa-solid fa-pen"></i></button>
                                                            </a>
                                                            {{-- @endif --}}
                                                            {{-- @if ($bannerModule['full_access'] == 1) --}}
                                                            <a data-toggle="tooltip" title="Delete">
                                                                <button class="btn btn-danger ml-2 confirmDelete"
                                                                    data-toggle="tooltip" title="Delete" module="grid"
                                                                    module_id={{ $grid->id }}><i
                                                                        class="fa-solid fa-trash-can"></i></button>
                                                            </a>
                                                            {{-- @endif --}}
                                                        </div>
                                                    </td>
                                                    {{-- @endif --}}
                                                </tr>
                                            @endforeach
                                        @endif
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
            $('#grid_card_table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "scrollX":true,
                // "columnDefs": [
                //     // { "width": "20%", "targets": 0 },  // Set the width of the first column
                //     { "width": "10px", "targets": 3 },  // Set the width of the second column
                // ]

            });
        });
    </script>
@endpush
