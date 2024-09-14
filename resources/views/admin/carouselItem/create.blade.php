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
        <form action="{{ route('admin.carousel-items.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="carousel_id">Carousel Type <span class="text-danger">*</span> </label>
                        <select class="form-control" id="carousel_id" name="carousel_id">
                            <option value="">select</option>

                            @foreach ($carousels as $carousel)
                                <option value="{{ $carousel->id }}">
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
                            <option value="product">Product</option>
                            <option value="category">Category</option>
                            <option value="link">Link</option>
                            <option value="other">Other</option>

                        </select>
                        @error('item_type')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="row">

                    <x-forms.text-input label="Item ID" type="text" name="item_id"
                        placeholder="Enter item ID e.g. '101'" spanStar='*' />

                    <x-forms.text-input label="Display Order" type="text" name="display_order"
                        placeholder="Enter Sorting number" spanStar='*' />

                </div>
                <hr>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>
@endsection
