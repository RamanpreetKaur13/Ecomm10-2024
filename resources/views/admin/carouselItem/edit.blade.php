@extends('admin.layout.layout')
@section('content')
    <div class="content-wrapper">
        @include('admin.includes.page_header', [
             'page_name' => 'Carousel Item',
            'breadcrumb_link' => route('admin.dashboard'),
            'breadcrumb_item' => 'Carousel Item',
        ])
        @include('alert_messages')
        @include('admin.includes.page_main_content', [
            'card_title' => 'Add Carousel Item',
            'back_link' => route('admin.carousel-items.index'),
        ])
        <form action="{{ route('admin.carousel-items.update', $carouselitem->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="carousel_id">Carousel Type <span class="text-danger">*</span> </label>
                        <select class="form-control" id="carousel_id" name="carousel_id">
                            <option value="">select</option>

                            @foreach ($carousels as $carousel)
                                <option value="{{ $carousel->id }}" @if ($carousel->id == $carouselitem->carousel_id) selected @endif>
                                    {{ $carousel->name }}</option>
                            @endforeach
                        </select>
                        @error('carousel_id')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-6">
                        <label for="item_type">Carousel Item Type <span class="text-danger">*</span> </label>
                        <select class="form-control" id="item_type" name="item_type">
                            <option value="">select</option>
                            <option value="product" @if ($carouselitem->item_type === 'product') selected @endif  >Product</option>
                            <option value="category" @if ($carouselitem->item_type === 'category') selected @endif >Category</option>
                            <option value="link" @if ($carouselitem->item_type === 'link') selected @endif >Link</option>
                            <option value="other" @if ($carouselitem->item_type === 'other') selected @endif >Other</option>

                        </select>
                        @error('item_type')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="row">
                        <div class="form-group col-6">
                            <label for="item_id">Item ID <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="item_id" name="item_id"
                                placeholder="Enter item ID e.g. '101'" value="{{ old('item_id', $carouselitem->item_id) }}">
    
                        </div>


                        <div class="form-group col-6">
                            <label for="display_order"> Display Order <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="display_order" name="display_order"
                                placeholder="Enter Sorting number" value="{{ old('display_order', $carouselitem->display_order) }}">
    
                        </div>

                </div>
                <hr>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>
@endsection
