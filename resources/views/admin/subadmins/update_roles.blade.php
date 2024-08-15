@extends('admin.layout.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Admins</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">subadmins</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12 m-auto">
                        @include('alert_messages')
                        <div class="card card-primary">

                            <div class="card-header">

                                <h3 class="card-title">Update Role</h3>
                                <a class="float-right" href="{{ route('admin.subadmins.index') }}">
                                    <button class="btn btn-primary">Back</button>
                                </a>
                            </div>
                            <form class="form-horizontal"
                                action="{{ route('admin.subadmins.update.roles', $subadmin->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="subadmin_id" value="{{ $subadmin->id }}">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Enter Email" name="email"
                                                value="{{ old('email', $subadmin->email) }}" readonly disabled
                                                style="background: #858282">
                                        </div>
                                    </div>


                                    {{-- <div class="form-group row mt-3">
                                      <table class="table">
                                        <thead>
                                            <th>Permissions To</th>
                                            <th>View Access</th>
                                            <th>Full Access</th>
                                            <th>Edit Access</th>
                                        </thead>
                                        <tr>
                                            <td>Cms Page</td>
                                            <td>
                                                <input type="checkbox" name="" id="">
                                            </td>
                                            <td>
                                                <input type="checkbox" name="" id="">
                                            </td>
                                            <td>
                                                <input type="checkbox" name="" id="">
                                            </td>
                                        </tr>
                                      </table>
                                    </div> --}}

                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Permissions</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead class="text-center">
                                                    <tr>
                                                        <th style="width: 10px">#</th>
                                                        <th>Permissions</th>
                                                        <th>View Access</th>
                                                        <th>Add/ Edit Access</th>
                                                        <th>Full Access</th>
                                                        {{-- <th style="width: 40px">Label</th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($get_admin_roles as $admin_role)
                                                        @if ($admin_role->module == 'cms_page')
                                                            @php
                                                                if ($admin_role->view_access == 1) {
                                                                    $viewCmsPage = 'checked';
                                                                } else {
                                                                    $viewCmsPage = '';
                                                                }
                                                                if ($admin_role->edit_access == 1) {
                                                                    $editCmsPage = 'checked';
                                                                } else {
                                                                    $editCmsPage = '';
                                                                }
                                                                if ($admin_role->full_access == 1) {
                                                                    $fullCmsPage = 'checked';
                                                                } else {
                                                                    $fullCmsPage = '';
                                                                }

                                                            @endphp
                                                        @endif

                                                        @if ($admin_role->module == 'categories')
                                                            @php
                                                                if ($admin_role->view_access == 1) {
                                                                    $viewCategories = 'checked';
                                                                } else {
                                                                    $viewCategories = '';
                                                                }
                                                                if ($admin_role->edit_access == 1) {
                                                                    $editCategories = 'checked';
                                                                } else {
                                                                    $editCategories = '';
                                                                }
                                                                if ($admin_role->full_access == 1) {
                                                                    $fullCategories = 'checked';
                                                                } else {
                                                                    $fullCategories = '';
                                                                }

                                                            @endphp
                                                        @endif

                                                        @if ($admin_role->module == 'brand')
                                                            @php
                                                                if ($admin_role->view_access == 1) {
                                                                    $viewBrand = 'checked';
                                                                } else {
                                                                    $viewBrand = '';
                                                                }
                                                                if ($admin_role->edit_access == 1) {
                                                                    $editBrand = 'checked';
                                                                } else {
                                                                    $editBrand = '';
                                                                }
                                                                if ($admin_role->full_access == 1) {
                                                                    $fullBrand = 'checked';
                                                                } else {
                                                                    $fullBrand = '';
                                                                }

                                                            @endphp
                                                        @endif


                                                        @if ($admin_role->module == 'family_colors')
                                                            @php
                                                                if ($admin_role->view_access == 1) {
                                                                    $viewFamilyColors = 'checked';
                                                                } else {
                                                                    $viewFamilyColors = '';
                                                                }
                                                                if ($admin_role->edit_access == 1) {
                                                                    $editFamilyColors = 'checked';
                                                                } else {
                                                                    $editFamilyColors = '';
                                                                }
                                                                if ($admin_role->full_access == 1) {
                                                                    $fullFamilyColors = 'checked';
                                                                } else {
                                                                    $fullFamilyColors = '';
                                                                }

                                                            @endphp
                                                        @endif


                                                        @if ($admin_role->module == 'products')
                                                            @php
                                                                if ($admin_role->view_access == 1) {
                                                                    $viewProducts = 'checked';
                                                                } else {
                                                                    $viewProducts = '';
                                                                }
                                                                if ($admin_role->edit_access == 1) {
                                                                    $editProducts = 'checked';
                                                                } else {
                                                                    $editProducts = '';
                                                                }
                                                                if ($admin_role->full_access == 1) {
                                                                    $fullProducts = 'checked';
                                                                } else {
                                                                    $fullProducts = '';
                                                                }

                                                            @endphp
                                                        @endif

                                                        @if ($admin_role->module == 'banner')
                                                            @php
                                                                if ($admin_role->view_access == 1) {
                                                                    $viewBanner = 'checked';
                                                                } else {
                                                                    $viewBanner = '';
                                                                }
                                                                if ($admin_role->edit_access == 1) {
                                                                    $editBanner = 'checked';
                                                                } else {
                                                                    $editBanner = '';
                                                                }
                                                                if ($admin_role->full_access == 1) {
                                                                    $fullBanner = 'checked';
                                                                } else {
                                                                    $fullBanner = '';
                                                                }

                                                            @endphp
                                                        @endif


                                                    @endforeach
                                                    <tr class="text-center">
                                                        <td>1</td>
                                                        <td>CMS Page</td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="customCheckbox1" value="1"
                                                                    name="cms_page[view]"
                                                                    @if (isset($viewCmsPage)) {{ $viewCmsPage }} @endif>
                                                                <label for="customCheckbox1"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="customCheckbox2" value="1"
                                                                    name="cms_page[edit]"
                                                                    @if (isset($editCmsPage)) {{ $editCmsPage }} @endif>
                                                                <label for="customCheckbox2"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="customCheckbox3" value="1"
                                                                    name="cms_page[full]"
                                                                    @if (isset($fullCmsPage)) {{ $fullCmsPage }} @endif>
                                                                <label for="customCheckbox3"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr class="text-center">
                                                        <td>2</td>
                                                        <td>Categories</td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="categoryViewCheckbox" value="1"
                                                                    name="categories[view]"
                                                                    @if (isset($viewCategories)) {{ $viewCategories }} @endif>
                                                                <label for="categoryViewCheckbox"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="categoryEditCheckbox" value="1"
                                                                    name="categories[edit]"
                                                                    @if (isset($editCategories)) {{ $editCategories }} @endif>
                                                                <label for="categoryEditCheckbox"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="categoryFullCheckbox" value="1"
                                                                    name="categories[full]"
                                                                    @if (isset($fullCategories)) {{ $fullCategories }} @endif>
                                                                <label for="categoryFullCheckbox"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr class="text-center">
                                                        <td>3</td>
                                                        <td>Brands</td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="brandsViewCheckbox" value="1"
                                                                    name="brand[view]"
                                                                    @if (isset($viewBrand)) {{ $viewBrand }} @endif>
                                                                <label for="brandsViewCheckbox"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="brandsEditCheckbox" value="1"
                                                                    name="brand[edit]"
                                                                    @if (isset($editBrand)) {{ $editBrand }} @endif>
                                                                <label for="brandsEditCheckbox"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="brandsFullCheckbox" value="1"
                                                                    name="brand[full]"
                                                                    @if (isset($fullBrand)) {{ $fullBrand }} @endif>
                                                                <label for="brandsFullCheckbox"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr class="text-center">
                                                        <td>4</td>
                                                        <td>Family Colors</td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="family_colorsViewCheckbox" value="1"
                                                                    name="family_colors[view]"
                                                                    @if (isset($viewFamilyColors)) {{ $viewFamilyColors }} @endif>
                                                                <label for="family_colorsViewCheckbox"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="family_colorsEditCheckbox" value="1"
                                                                    name="family_colors[edit]"
                                                                    @if (isset($editFamilyColors)) {{ $editFamilyColors }} @endif>
                                                                <label for="family_colorsEditCheckbox"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="family_colorsFullCheckbox" value="1"
                                                                    name="family_colors[full]"
                                                                    @if (isset($fullFamilyColors)) {{ $fullFamilyColors }} @endif>
                                                                <label for="family_colorsFullCheckbox"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr class="text-center">
                                                        <td>5</td>
                                                        <td>Products</td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="productsViewCheckbox" value="1"
                                                                    name="products[view]"
                                                                    @if (isset($viewProducts)) {{ $viewProducts }} @endif>
                                                                <label for="productsViewCheckbox"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="productsEditCheckbox" value="1"
                                                                    name="products[edit]"
                                                                    @if (isset($editProducts)) {{ $editProducts }} @endif>
                                                                <label for="productsEditCheckbox"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="productsFullCheckbox" value="1"
                                                                    name="products[full]"
                                                                    @if (isset($fullProducts)) {{ $fullProducts }} @endif>
                                                                <label for="productsFullCheckbox"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr class="text-center">
                                                        <td>6</td>
                                                        <td>Banners</td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="bannerViewCheckbox" value="1"
                                                                    name="banner[view]"
                                                                    @if (isset($viewBanner)) {{ $viewBanner }} @endif>
                                                                <label for="bannerViewCheckbox"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="bannerEditCheckbox" value="1"
                                                                    name="banner[edit]"
                                                                    @if (isset($editBanner)) {{ $editBanner }} @endif>
                                                                <label for="bannerEditCheckbox"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox text-center">
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="bannerFullCheckbox" value="1"
                                                                    name="banner[full]"
                                                                    @if (isset($fullBanner)) {{ $fullBanner }} @endif>
                                                                <label for="bannerFullCheckbox"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                    </tr>




                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                        {{-- <div class="card-footer clearfix">
                                          <ul class="pagination pagination-sm m-0 float-right">
                                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                          </ul>
                                        </div> --}}
                                    </div>


                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="reset" class="btn btn-default float-right">Cancel</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
