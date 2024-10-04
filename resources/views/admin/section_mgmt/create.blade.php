@extends('admin.layout.layout')
@section('content')
    <div class="content-wrapper">
        @include('admin.includes.page_header', [
            'page_name' => 'Section Management',
            'breadcrumb_link' => route('admin.dashboard'),
            'breadcrumb_item' => 'Section Management',
        ])
        @include('alert_messages')
        @include('admin.includes.page_main_content', [
            'card_title' => 'Add Section',
            'back_link' => route('admin.section-management.index'),
        ])
        <form action="{{ route('admin.section-management.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <x-forms.text-input label="Section Name" type="text" name="name" placeholder="Enter section name"
                        spanStar='' />
                    <div class="form-group col-6">
                        <label for="section_type">Section Type<span class="text-danger">*</span> </label>
                        <select class="form-control" id="section_type" name="section_type">
                            <option value="">select</option>
                            <option value="banner" @if (old('section_type') === 'banner') selected @endif>
                                Banner</option>
                            <option value="grid" @if (old('section_type') === 'grid') selected @endif>
                                Grid</option>
                                <option value="single-grid-item-1" @if (old('section_type') === 'single-grid-item-1') selected @endif>
                                    Single Grid Item 1</option>
                                    <option value="single-grid-item-2" @if (old('section_type') === 'single-grid-item-2') selected @endif>
                                        Single Grid Item 2</option>
                            <option value="carousel" @if (old('section_type') === 'carousel') selected @endif>
                                Carousel</option>

                                <option value="promotional-banner-1" @if (old('section_type') === 'promotional-banner-1') selected @endif>
                                    Promotional Banner 1</option>
                                    <option value="promotional-banner-2" @if (old('section_type') === 'promotional-banner-2') selected @endif>
                                        Promotional Banner 2</option>
                            <option value="custom" @if (old('section_type') === 'custom') selected @endif>
                                Custom</option>
                            <option value="other" @if (old('section_type') === 'other') selected @endif>
                                Other</option>
                        </select>
                        @error('section_type')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="row">
                    <x-forms.text-input label="Display Order" type="text" name="display_order"
                        placeholder="Enter Sorting number" spanStar='*' />

                        <x-forms.file-component label="Section Image" name="image_url" dimension='max. 150 x 100px' spanStar='' />

                </div>
                @error('display_order')
                <span class="text-danger"> {{ $message }}</span>
            @enderror

                <small class="text-muted">Taken numbers: <span id="taken-numbers"></span></small>

                <hr>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </section>
    </div>

    @push('script')
    

<script>
    $(document).ready(function() {
        var existingDisplayOrders = @json($all_homepage_sections_display_orders);

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
