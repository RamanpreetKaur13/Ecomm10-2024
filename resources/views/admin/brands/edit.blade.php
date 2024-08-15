@extends('admin.layout.layout')
@push('styles')
    <style>
        .img-wrap {
            position: relative;

        }

        .close {
            background: red;
            border-radius: 21px;
            padding: 1px 15px;
            width: 31px;
            height: 31px;
        }

        .img-wrap .close {
            position: absolute;
            top: -15px;
            right: 291px;
            z-index: 100;
            padding-left: 9px;
            padding-top: 3px;

        }
    </style>
@endpush
@section('content')
    <div class="content-wrapper">
        @include('admin.includes.page_header', [
            'page_name' => 'Brands',
            'breadcrumb_link' => route('admin.dashboard'),
            'breadcrumb_item' => 'brands',
        ])
        @include('admin.includes.page_main_content', [
            'card_title' => 'Edit Brands',
            'back_link' => route('admin.brands.index'),
        ])
                            <form action="{{ route('admin.brands.update', $brand->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="brand_name">Brand Name</label>
                                            <input type="text" class="form-control" id="brand_name"
                                                name="brand_name" placeholder="Enter category name"
                                                value="{{ old('brand_name', $brand->brand_name) }}">
                                            @error('brand_name')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="brand_url">URL</label>
                                            <input type="text" class="form-control" id="brand_url" name="brand_url"
                                                placeholder="ex:about-page" value="{{ old('brand_url', $brand->brand_url) }}">
                                            @error('brand_url')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>



                                    </div>
                                    <div class="row">

                                        <div class="form-group col-6">
                                            <label for="brand_discount">Brand Discount</label>
                                            <input type="text" class="form-control" id="brand_discount"
                                                name="brand_discount" placeholder="Enter brand discount"
                                                value="{{ old('brand_discount', $brand->brand_discount) }}">
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="brand_description">Brand description</label>
                                            <textarea class="form-control" name="brand_description" rows="1"
                                             placeholder="Enter brand description">{{ old('brand_description', $brand->brand_description) }}</textarea>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="brand_logo">Brand Logo</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="brand_logo"
                                                        name="brand_logo">

                                                    <label class="custom-file-label" for="brand_logo">Choose
                                                        file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="brand_image">Brand Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="brand_image"
                                                        name="brand_image">

                                                    <label class="custom-file-label" for="brand_image">Choose
                                                        file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-6">
                                            @if (!empty($brand->brand_logo))
                                            <div class="img-wrap">
                                                <a href="javascript:void(0);" class="confirmDelete" data-toggle="tooltip"
                                                    title="Delete Image" module="brand-logo"
                                                    module_id={{ $brand->id }}>
                                                    <span class="close">&times;</span>
                                                </a>
                                                <a href="{{ asset('storage/front/images/brands/' . $brand->brand_logo) }}"
                                                    target="_blank">
                                                    <img src="{{ asset('storage/front/images/brands/' . $brand->brand_logo) }}"
                                                        alt="" srcset="" height="150px" width="200px">
                                                </a>
                                            </div>
                                            @else
                                            <div class="img-wrap">
                                                    <img src="{{ asset('admin/img/no-image.png') }}"
                                                        alt="" srcset="" height="130px" width="150px">
                                            </div>
                                            @endif
                                        </div>

                                        <div class="form-group col-6">
                                            @if (!empty($brand->brand_image))
                                            <div class="img-wrap">
                                                <a href="javascript:void(0);" class="confirmDelete" data-toggle="tooltip"
                                                    title="Delete Image" module="brand-image"
                                                    module_id={{ $brand->id }}>
                                                    <span class="close">&times;</span>
                                                </a>
                                                <a href="{{ asset('storage/front/images/brands/' . $brand->brand_image) }}"
                                                    target="_blank">
                                                    <img src="{{ asset('storage/front/images/brands/' . $brand->brand_image) }}"
                                                        alt="" srcset="" height="150px" width="200px">
                                                </a>
                                            </div>
                                            @else
                                            <div class="img-wrap">
                                                    <img src="{{ asset('admin/img/no-image.png') }}"
                                                        alt="" srcset="" height="130px" width="150px">
                                            </div>
                                            @endif
                                        </div>



                                    </div>
                                    <hr>
                                    <div class="row mt-4">
                                        <div class="form-group col-6">
                                            <label for="meta_title">Meta Title</label>
                                            <input type="text" class="form-control" id="meta_title" name="meta_title"
                                                placeholder="Enter Meta keyword"
                                                value="{{ old('meta_title', $brand->meta_title) }}">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="meta_keyword">Meta Keyword</label>
                                            <input type="text" class="form-control" id="meta_keyword"
                                                name="meta_keyword" placeholder="Enter Meta keyword"
                                                value="{{ old('meta_keyword', $brand->meta_keyword) }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="meta_description">Meta Description</label>
                                            <textarea class="form-control" name="meta_description" rows="1" placeholder="Enter Meta Description">{{ old('meta_description', $brand->meta_description) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection