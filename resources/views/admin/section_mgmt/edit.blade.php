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
            'card_title' => 'Edit Section',
            'back_link' => route('admin.section-management.index'),
        ])
        <form action="{{ route('admin.section-management.update', $homepage_section->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- this hidden input name= id will use for validating display_order uniqueness --}}
            <input type="text" value="{{  $homepage_section->id }}" name="id">
            <div class="card-body">
                <div class="row">
                  
                    <div class="form-group col-6">
                        <label for="name">Section Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Enter Section Name " value="{{ old('name', $homepage_section->name) }}">
                    </div>
                    <div class="form-group col-6">
                        <label for="section_type">Section Type<span class="text-danger">*</span></label>
                        <select class="form-control" id="section_type" name="section_type">
                            <option value="">select</option>
                            <option value="banner" @if ($homepage_section->section_type === 'banner') selected @endif>
                                Banner</option>
                            <option value="grid" @if ($homepage_section->section_type === 'grid') selected @endif>
                                Grid</option>

                            <option value="carousel" @if ($homepage_section->section_type === 'carousel') selected @endif>
                                Carousel</option>
                            <option value="custom" @if ($homepage_section->section_type === 'custom') selected @endif>
                                Custom</option>

                            <option value="other" @if ($homepage_section->section_type === 'other') selected @endif>
                                Other</option>
                        </select>
                        @error('section_type')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                </div>
                
                <div class="row">

                    <div class="form-group col-6">
                        <label for="display_order"> Display Order <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="display_order" name="display_order"
                            placeholder="Enter Sorting number" value="{{ old('display_order', $homepage_section->display_order) }}">
                            <small class="text-muted">Taken numbers: <span id="taken-numbers"></span></small>
                            @error('display_order')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-6 d-none">
                        <label for="status">Status <span class="text-danger">*</span></label>
                        <input type="hidden" class="form-control" id="status"
                            style="background-color: #e9ecef80; color:#333;" name="status"
                            placeholder="Enter Section status" value="{{ $homepage_section->status }}">
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
