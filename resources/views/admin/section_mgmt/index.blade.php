@extends('admin.layout.layout')
@section('content')
    <div class="content-wrapper">
        @include('admin.includes.page_header', [
            'page_name' => 'Section Management',
            'breadcrumb_link' => route('admin.dashboard'),
            'breadcrumb_item' => 'Section Management',
        ])

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('alert_messages')
                        <div class="card">
                            <div class="card-header">
                                {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                <a class="card-title float-right" href="{{ route('admin.section-management.create') }}">
                                    <button class="btn btn-primary"> Add Section</button>
                                </a>
                                {{-- @endif --}}
                            </div>
                            <div class="card-body">
                                <table id="section_mgmt_table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.no.</th>
                                            <th>Section Name</th>
                                            {{-- <th>Title</th> --}}
                                            <th>Section Type</th>
                                            <th>Display Order</th>
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
                                        @foreach ($homepage_sections as $section)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $section->name }}</td>
                                                <td>{{ Str::ucfirst( $section->section_type) }}</td>
                                                {{-- <td>{{ Str::limit($banner->link, 50, '...') }}</td> --}}
                                                <td>{{ $section->display_order }}</td>

                                                <!-----restrict this feature is subadmin has no permissions ----->
                                                {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                                    <td>
                                                        {{-- @if ($section->status == 1)
                                                            <a href="javascript:void(0)" class="updateHomepageSectionStatus"
                                                                style="color:none; !important"
                                                                id="homepageSection-{{ $section->id }}"
                                                                homepageSection_id={{ $section->id }} status="Active">
                                                                <i class="fa-solid fa-toggle-on status"
                                                                    data-toggle="tooltip" title="Active"
                                                                    homepageSection_status="Active"></i>
                                                            </a>
                                                        @elseif($banner->status == 0)
                                                            <a href="javascript:void(0)" class="updateHomepageSectionStatus"
                                                                style="color: grey;  !important"
                                                                id="homepageSection-{{ $section->id }}"
                                                                homepageSection_id={{ $section->id }} status="Inactive">
                                                                <i class="fa-solid fa-toggle-off status"
                                                                    data-toggle="tooltip" title="Inactive"
                                                                    homepageSection_status="Inactive"></i>
                                                            </a>
                                                        @endif --}}

                                                        @if ($section->status == 1)
                                                        <a href="javascript:void(0)" class="updateHomepageSectionStatus"
                                                            style="color:none; !important" id="homepage_section-{{ $section->id }}"
                                                            homepage_section_id={{ $section->id }} status="Active">
                                                            <i class="fa-solid fa-toggle-on status" data-toggle="tooltip"
                                                                title="Active" homepage_section_status="Active"></i>
                                                        </a>
                                                    @elseif($section->status == 0)
                                                        <a href="javascript:void(0)" class="updateHomepageSectionStatus"
                                                            style="color: grey;  !important" id="homepage_section-{{ $section->id }}"
                                                            homepage_section_id={{ $section->id }} status="Inactive">
                                                            <i class="fa-solid fa-toggle-off status" data-toggle="tooltip"
                                                                title="Inactive" homepage_section_status="Inactive"></i>
                                                        </a>
                                                    @endif


                                                    </td>
                                                {{-- @endif --}}
                                                <td>{{ date_time_format($section->created_at) }}
                                                </td>
                                                <td> {{ date_time_format($section->updated_at) }}
                                                </td>
                                                {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                                    <td>

                                                        <div class="d-flex justify-content-center align-items-center">
                                                            {{-- @if ($bannerModule['edit_access'] == 1 || $bannerModule['full_access'] == 1) --}}
                                                                <a href="{{ route('admin.section-management.edit', $section->id) }}"
                                                                    data-toggle="tooltip" title="Edit">
                                                                    <button class="btn btn-primary"><i
                                                                            class="fa-solid fa-pen"></i></button>
                                                                </a>
                                                            {{-- @endif --}}
                                                            {{-- @if ($bannerModule['full_access'] == 1) --}}
                                                                <a data-toggle="tooltip" title="Delete">
                                                                    <button class="btn btn-danger ml-2 confirmDelete"
                                                                        data-toggle="tooltip" title="Delete" module="homepageSection"
                                                                        module_id={{ $section->id }}><i
                                                                            class="fa-solid fa-trash-can"></i></button>
                                                                </a>
                                                            {{-- @endif --}}
                                                        </div>
                                                    </td>
                                                {{-- @endif --}}
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
            $('#section_mgmt_table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                // "scrollX": true,
                // "columnDefs": [
                //     // { "width": "20%", "targets": 0 },  // Set the width of the first column
                //     { "width": "10px", "targets": 3 },  // Set the width of the second column
                // ]

            });
        });
    </script>
@endpush
