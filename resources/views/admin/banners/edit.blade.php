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

        .ck.ck-content {
            background-color: #f5f5f5;
            /* Change to the desired background color */
        }

        /* Change text color */
        .ck.ck-content {
            color: #333;
            /* Change to the desired text color */
        }
    </style>
@endpush
@section('content')
    <div class="content-wrapper">

        @include('admin.includes.page_header', [
            'page_name' => 'Banners',
            'breadcrumb_link' => route('admin.dashboard'),
            'breadcrumb_item' => 'banners',
        ])
        @include('alert_messages')
        @include('admin.includes.page_main_content', [
            'card_title' => 'Edit Banners',
            'back_link' => route('admin.banners.index'),
        ])

        <form action="{{ route('admin.banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    {{-- <div class="form-group col-12"> --}}
                    <div class="form-group col-6">
                        <label for="homepage_section_id">Section Type <span class="text-danger">*</span> </label>
                        <select class="form-control" id="homepage_section_id" name="homepage_section_id">
                            <option value="">select</option>

                            @foreach ($homepage_section as $section)
                                <option value="{{ $section->id }}" @if ($section->id == $banner->homepage_section_id) selected @endif>
                                    {{ $section->name }}</option>
                            @endforeach
                        </select>
                        @error('homepage_section_id')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>




                    {{-- <label for="title">Banner Title <span class="text-danger">*</span></label>
                                            <textarea name="title" id="title" class="form-control summernote"
                                            placeholder="Enter Banner Title">{{ old('title', $banner->title) }}</textarea>
                                          
                                            @error('title')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror  --}}
                    {{-- </div> --}}


                    <div class="form-group col-6">
                        <label for="image">Banner Image <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image_url">

                                <label class="custom-file-label" for="image">Choose
                                    file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                        @error('image_url')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="link_url">Banner link</label>
                        <input type="text" class="form-control" id="link" name="link_url"
                            placeholder="Enter Banner Link" value="{{ old('link_url', $banner->link_url) }}">
                    </div>


                    <div class="form-group col-6">
                        @if (!empty($banner->image_url))
                            <div class="img-wrap">
                                <a href="javascript:void(0);" class="confirmDelete" data-toggle="tooltip"
                                    title="Delete Image" module="banner-image" module_id={{ $banner->id }}>
                                </a>
                                <a href="{{ asset('storage/front/image/banners/' . $banner->image_url) }}" target="_blank">
                                    <img src="{{ asset('storage/front/images/banners/' . $banner->image_url) }}" alt=""
                                        srcset="" width="100px" height="80px">
                                </a>
                            </div>
                        @else
                            <div class="img-wrap">
                                <img src="{{ asset('admin/img/no-image.png') }}" alt="" srcset=""
                                    height="80px" width="100px">
                            </div>
                        @endif
                    </div>


                </div>
                <div class="row">


                    <div class="form-group col-6">
                        <label for="alt">Banner Alt <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="alt" name="alt_text"
                            placeholder="Enter Banner alt" value="{{ old('alt_text', $banner->alt_text) }}">
                    </div>

                    <div class="form-group col-6">
                        <label for="sort"> Display Order <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="sort" name="display_order"
                            placeholder="Enter sort number" value="{{ old('display_order', $banner->display_order) }}">

                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-6 d-none">
                        <label for="status">Banner Status <span class="text-danger">*</span></label>
                        <input type="hidden" class="form-control" id="status"
                            style="background-color: #e9ecef80; color:#333;" name="status"
                            placeholder="Enter Banner status" value="{{ $banner->status }}">
                    </div>
                </div>
                <hr>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
        </form>
    </div>
@endsection
