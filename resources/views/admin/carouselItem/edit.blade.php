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
            <input type="text" value="{{ $carouselitem->id }}" name="id">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="homepage_section_id">Carousel Type <span class="text-danger">*</span> </label>
                        <select class="form-control" id="homepage_section_id" name="homepage_section_id">
                            <option value="">select</option>

                            @foreach ($homepage_section as $section)
                                <option value="{{ $section->id }}" @if ($section->id == $carouselitem->homepage_section_id) selected @endif>
                                    {{ $section->name }}</option>
                            @endforeach
                        </select>
                        @error('homepage_section_id')
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
                        {{-- <div class="form-group col-6">
                            <label for="item_id">Item ID <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="item_id" name="item_id"
                                placeholder="Enter item ID e.g. '101'" value="{{ old('item_id', $carouselitem->item_id) }}">
    
                        </div> --}}

                        <x-forms.file-component label="Grid Image" name="image_url" dimension='max. 150 x 100px' spanStar='*' />


                        <div class="form-group col-6">
                            <label for="display_order"> Display Order <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="display_order" name="display_order"
                                placeholder="Enter Sorting number" value="{{ old('display_order', $carouselitem->display_order) }}">
                                @error('display_order')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                                <small class="text-muted">Taken numbers: <span id="taken-numbers"></span></small>
                        </div>

                </div>

                <div class="form-group col-6">

                    <div class="form-group col-6 d-none">
                        <label for="status">Carousel item Status <span class="text-danger">*</span></label>
                        <input type="hidden" class="form-control" id="status"
                            style="background-color: #e9ecef80; color:#333;" name="status"
                            placeholder="Enter Carousel status" value="{{ $carouselitem->status }}">
                    </div>

                    @if (!empty($carouselitem->image_url))
                        <div class="img-wrap">
                            
                            <a href="{{ asset('storage/front/images/carousels/' . $carouselitem->image_url) }}" target="_blank">
                                <img src="{{ asset('storage/front/images/carousels/' . $carouselitem->image_url) }}" alt=""
                                    srcset="" width="150px" height="100px">
                            </a>
                        </div>
                    @else
                        <div class="img-wrap">
                            <img src="{{ asset('admin/img/no-image.png') }}" alt="" srcset=""
                                height="80px" width="100px">
                        </div>
                    @endif
                </div>
                <hr>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>

    @push('script')
    

<script>
    $(document).ready(function() {
        var existingDisplayOrders = @json($all_carousel_item_display_orders);

        // Display the taken numbers
        $('#taken-numbers').text(existingDisplayOrders.join(', '));

        // Check display order on input blur (when user leaves the field)
        $('#display_order').on('blur', function() {
            var inputVal = $(this).val();
            if (inputVal !== "" && existingDisplayOrders.includes(parseInt(inputVal))) {
                alert('This display order is already taken. Please choose another one.');
                $(this).val(''); // Clear the input field
            }
        });
    });
</script>
@endpush
@endsection
