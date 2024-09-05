@extends('admin.layout.layout')
@section('content')
    <div class="content-wrapper">
        @include('admin.includes.page_header', [
            'page_name' => 'Carousel',
            'breadcrumb_link' => route('admin.dashboard'),
            'breadcrumb_item' => 'Carousel',
        ])

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('alert_messages')
                        <div class="card">
                            <div class="card-header">
                                {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                <a class="card-title float-right" href="{{ route('admin.carousel.create') }}">
                                    <button class="btn btn-primary"> Add Carousel</button>
                                </a>
                                {{-- @endif --}}
                            </div>
                            <div class="card-body">
                                <table id="carousel_table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.no.</th>
                                            <th>Section Name</th>
                                            <th>Section Type</th>
                                            <th>Title</th>
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
                                        @if ($carousels->isNotEmpty())
                                            @foreach ($carousels as $carousel)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $carousel->homepage_section->name }}</td>
                                                    <td>{{ Str::ucfirst( $carousel->homepage_section->section_type) }}</td>
                                                    <td>{{ $carousel->name }}</td>
                                                    <td>{{ $carousel->display_order }}</td>

                                                    {{-- restrict this feature is subadmin has no permissions --}}
                                                    {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                                    <td>
                                                        @if ($carousel->status == 1)
                                                            <a href="javascript:void(0)" class="updateCarouselStatus"
                                                                style="color:none; !important"
                                                                id="carousel-{{ $carousel->id }}"
                                                                carousel_id={{ $carousel->id }} status="Active">
                                                                <i class="fa-solid fa-toggle-on status"
                                                                    data-toggle="tooltip" title="Active"
                                                                    carousel_status="Active"></i>
                                                            </a>
                                                        @elseif($carousel->status == 0)
                                                            <a href="javascript:void(0)" class="updateCarouselStatus"
                                                                style="color: grey;  !important"
                                                                id="carousel-{{ $carousel->id }}"
                                                                carousel_id={{ $carousel->id }} status="Inactive">
                                                                <i class="fa-solid fa-toggle-off status"
                                                                    data-toggle="tooltip" title="Inactive"
                                                                    carousel_status="Inactive"></i>
                                                            </a>
                                                        @endif

                                                    </td>
                                                    {{-- @endif --}}
                                                    <td>{{ date_time_format($carousel->created_at) }}
                                                    </td>
                                                    <td> {{ date_time_format($carousel->updated_at) }}
                                                    </td>
                                                    {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                                    <td>

                                                        <div class="d-flex justify-content-center align-items-center">
                                                            {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                                            <a href="{{ route('admin.carousel.edit', $carousel->id) }}"
                                                                data-toggle="tooltip" title="Edit">
                                                                <button class="btn btn-primary"><i
                                                                        class="fa-solid fa-pen"></i></button>
                                                            </a>
                                                            {{-- @endif --}}
                                                            {{-- @if ($bannerModule['full_access'] == 1) --}}
                                                            <a data-toggle="tooltip" title="Delete">
                                                                <button class="btn btn-danger ml-2 confirmDelete"
                                                                    data-toggle="tooltip" title="Delete" module="carousel"
                                                                    module_id={{ $carousel->id }}><i
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
            $('#carousel_table').DataTable({
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
