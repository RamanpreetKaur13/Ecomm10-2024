@extends('admin.layout.layout')
@section('content')
    <div class="content-wrapper">
        @include('admin.includes.page_header', [
            'page_name' => 'Carousel Item',
            'breadcrumb_link' => route('admin.dashboard'),
            'breadcrumb_item' => 'Carousel Item',
        ])

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('alert_messages')
                        <div class="card">
                            <div class="card-header">
                                {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                <a class="card-title float-right" href="{{ route('admin.carousel-items.create') }}">
                                    <button class="btn btn-primary"> Add Carousel Item</button>
                                </a>
                                {{-- @endif --}}
                            </div>
                            <div class="card-body">
                                <table id="carousel_item_table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.no.</th>
                                            <th>Carousel</th>
                                            <th>Item Type</th>
                                            <th>Image </th>
                                            <th>Display order</th>
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
                                        @if ($carousel_items->isNotEmpty())
                                            @foreach ($carousel_items as $carousel_item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $carousel_item->homepage_section->name }}</td>
                                                    <td>{{ Str::ucfirst( $carousel_item->item_type) }}</td>
                                                    {{-- <td>{{ $carousel_item->item_id }}</td> --}}
                                                    <td>
                                                        <img src="{{ asset('storage/front/images/carousels/' . $carousel_item->image_url) }}"
                                                            alt="" srcset="" width="100px" height="80px"></td>
                                                    <td>{{ $carousel_item->display_order }}</td>

                                                    {{-- restrict this feature is subadmin has no permissions --}}
                                                    {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                                    <td>
                                                        {{-- @if ($carousel_item->status == 1)
                                                            <a href="javascript:void(0)" class="updateCarouselItemStatus"
                                                                style="color:none; !important"
                                                                id="carouselItem-{{ $carousel_item->id }}"
                                                                carouselItem_id={{ $carousel_item->id }} status="Active">
                                                                <i class="fa-solid fa-toggle-on status"
                                                                    data-toggle="tooltip" title="Active"
                                                                    carouselItem_status="Active"></i>
                                                            </a>
                                                        @elseif($carousel_item->status == 0)
                                                            <a href="javascript:void(0)" class="updateCarouselItemStatus"
                                                                style="color: grey;  !important"
                                                                id="carouselItem-{{ $carousel_item->id }}"
                                                                carouselItem_id={{ $carousel_item->id }} status="Inactive">
                                                                <i class="fa-solid fa-toggle-off status"
                                                                    data-toggle="tooltip" title="Inactive"
                                                                    carouselItem_status="Inactive"></i>
                                                            </a>
                                                        @endif --}}

                                                        @if ($carousel_item->status == 1)
                                                            <a href="javascript:void(0)" class="updateCarouselitemStatus"
                                                                style="color:none; !important"
                                                                id="carouselitem-{{ $carousel_item->id }}"
                                                                carouselitem_id={{ $carousel_item->id }} status="Active">
                                                                <i class="fa-solid fa-toggle-on status"
                                                                    data-toggle="tooltip" title="Active"
                                                                    carouselitem_status="Active"></i>
                                                            </a>
                                                        @elseif($carousel_item->status == 0)
                                                            <a href="javascript:void(0)" class="updateCarouselitemStatus"
                                                                style="color: grey;  !important"
                                                                id="carouselitem-{{ $carousel_item->id }}"
                                                                carouselitem_id={{ $carousel_item->id }} status="Inactive">
                                                                <i class="fa-solid fa-toggle-off status"
                                                                    data-toggle="tooltip" title="Inactive"
                                                                    carouselitem_status="Inactive"></i>
                                                            </a>
                                                        @endif


                                                    </td>
                                                    {{-- @endif --}}
                                                    <td>{{ date_time_format($carousel_item->created_at) }}
                                                    </td>
                                                    <td> {{ date_time_format($carousel_item->updated_at) }}
                                                    </td>
                                                    {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                                    <td>

                                                        <div class="d-flex justify-content-center align-items-center">
                                                            {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                                            <a href="{{ route('admin.carousel-items.edit', $carousel_item->id) }}"
                                                                data-toggle="tooltip" title="Edit">
                                                                <button class="btn btn-primary"><i
                                                                        class="fa-solid fa-pen"></i></button>
                                                            </a>
                                                            {{-- @endif --}}
                                                            {{-- @if ($bannerModule['full_access'] == 1) --}}
                                                            <a data-toggle="tooltip" title="Delete">
                                                                <button class="btn btn-danger ml-2 confirmDelete"
                                                                    data-toggle="tooltip" title="Delete" module="carouselitem"
                                                                    module_id={{ $carousel_item->id }}><i
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
            $('#carousel_item_table').DataTable({
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
