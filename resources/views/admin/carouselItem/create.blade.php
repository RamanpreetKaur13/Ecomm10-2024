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
                        <label for="homepage_section_id">Carousel Type <span class="text-danger">*</span> </label>
                        <select class="form-control" id="homepage_section_id" name="homepage_section_id">
                            <option value="">select</option>

                            @foreach ($homepage_section as $section)
                                <option value="{{ $section->id }}">
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
                    <x-forms.file-component label="Carousel Image" name="image_url" dimension='max. 150 x 100px' spanStar='*' />

                    <x-forms.text-input label="Display Order" type="text" name="display_order"
                        placeholder="Enter Sorting number" spanStar='*' />

                </div>
                <div class="row">

                    <div class="form-group col-6"></div>
                    <div class="form-group col-6"><small class="text-muted">Taken numbers: <span id="taken-numbers"></span></small>
                    </div>


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
