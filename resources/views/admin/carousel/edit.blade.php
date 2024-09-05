@extends('admin.layout.layout')
@section('content')
    <div class="content-wrapper">
        @include('admin.includes.page_header', [
            'page_name' => 'Carousel',
            'breadcrumb_link' => route('admin.dashboard'),
            'breadcrumb_item' => 'Carousel',
        ])
        @include('alert_messages')
        @include('admin.includes.page_main_content', [
            'card_title' => 'Add Carousel',
            'back_link' => route('admin.carousel.index'),
        ])
        <form action="{{ route('admin.carousel.update', $carousel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="homepage_section_id">Section Type <span class="text-danger">*</span> </label>
                        <select class="form-control" id="homepage_section_id" name="homepage_section_id">
                            <option value="">select</option>

                            @foreach ($homepage_section as $section)
                                <option value="{{ $section->id }}" @if ($section->id == $carousel->homepage_section_id) selected @endif>
                                    {{ $section->name }}</option>
                            @endforeach
                        </select>
                        @error('homepage_section_id')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-6">
                        <label for="alt">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="name" placeholder="Enter Name"
                            value="{{ old('name', $carousel->name) }}">

                            @error('name')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                   


                </div>


                <div class="row">

                    <div class="form-group col-6">
                        <label for="display_order">Display Order <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="display_order" name="display_order"
                            placeholder="Enter display order" value="{{ old('display_order', $carousel->display_order) }}">
                            @error('display_order')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
    
                        </div>

                  
                </div>
                <hr>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>
@endsection
