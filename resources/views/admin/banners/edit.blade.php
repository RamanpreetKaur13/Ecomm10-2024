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
    background-color: #f5f5f5; /* Change to the desired background color */
}

/* Change text color */
.ck.ck-content {
    color: #333; /* Change to the desired text color */
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
       
                            <form action="{{ route('admin.banners.update', $banner->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="title">Banner Title <span class="text-danger">*</span></label>
                                            <textarea name="title" id="title" class="form-control summernote"
                                            placeholder="Enter Banner Title">{{ old('title', $banner->title) }}</textarea>
                                            {{-- <input type="text" class="form-control" id="summernote"
                                                name="title" placeholder="Enter category name"
                                                value="{{ old('title', $banner->title) }}">--}}
                                            @error('title')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror 
                                        </div>

                                       

                                    </div>
                                    <div class="row">

                                       
                                        <div class="form-group col-6">
                                            <label for="alt">Banner Alt  <small>only for admin (not for front)</small><span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="alt"
                                                name="alt" placeholder="Enter Banner alt"
                                                value="{{ old('alt', $banner->alt) }}">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="type">Banner Type <span class="text-danger">*</span></label>
                                            <select class="form-control" id="type" name="type">
                                                <option value="">select</option>
                                                <option value="Fixed" @if ($banner->type ==='Fixed' ) selected @endif>
                                                    Fixed</option>
                                                <option value="Slider" @if ($banner->type==='Slider' ) selected @endif>
                                                    Slider</option>
                                            </select>
                                            @error('type')
                                            <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row">
                                      
                                        {{-- <div class="form-group col-6">
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
                                        </div> --}}
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-6">
                                            <label for="image">Banner Image <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image"
                                                        name="image">

                                                    <label class="custom-file-label" for="image">Choose
                                                        file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                           @error('image')
                                               <span class="text-danger">{{ $message }}</span>
                                           @enderror
                                        </div>

                                        <div class="form-group col-6 d-none">
                                            <label for="status">Banner Status <span class="text-danger">*</span></label>
                                            <input type="hidden" class="form-control" id="status" style="background-color: #e9ecef80; color:#333;"
                                                name="status" placeholder="Enter Banner status"
                                               
                                                value="{{ $banner->status }}">
                                        </div>

                                      
                                        <div class="form-group col-6">
                                            <label for="sort"> Sort <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="sort"
                                                name="sort" placeholder="Enter sort number" value="{{ old('sort',$banner->sort)  }}">
                                               
                                        </div>

                                    </div>
                                    <div class="row">
                                        
                                        <div class="form-group col-6">
                                            @if (!empty($banner->image))
                                            <div class="img-wrap">
                                                <a href="javascript:void(0);" class="confirmDelete" data-toggle="tooltip"
                                                    title="Delete Image" module="banner-image"
                                                    module_id={{ $banner->id }}>
                                                    {{-- <span class="close">&times;</span> --}}
                                                </a>
                                                <a href="{{ asset('storage/front/image/banners/' . $banner->image) }}"
                                                    target="_blank">
                                                    <img src="{{ asset('storage/front/images/banners/' . $banner->image) }}"
                                                        alt="" srcset="" width="100px" height="80px">
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
                                            <label for="link">Banner link</label>
                                            <input type="text" class="form-control" id="link"
                                                name="link" placeholder="Enter Banner Link"
                                                value="{{ old('link', $banner->link) }}">
                                        </div>



                                    </div>
                                    <hr>
                                    
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
