@extends('admin.layout.layout')
@section('content')
<div class="content-wrapper">
    @include('admin.includes.page_header', [
        'page_name' => 'Grid Cards',
        'breadcrumb_link' => route('admin.dashboard'),
        'breadcrumb_item' => 'grid-cards',
    ])
    @include('alert_messages')
    @include('admin.includes.page_main_content', [
        'card_title' => 'Add Grid card',
        'back_link' => route('admin.grid-cards.index'),
    ])
    <form action="{{ route('admin.grid-cards.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="homepage_section_id">Section Type <span class="text-danger">*</span> </label>
                    <select class="form-control" id="homepage_section_id" name="homepage_section_id">
                        <option value="">select</option>
                        @foreach ($homepage_section as $section)
                            <option value="{{ $section->id }}" @if (old('homepage_section_id') == $section->id) selected @endif>
                                {{ $section->name }}</option>
                        @endforeach
                    </select>
                    @error('homepage_section_id')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <x-forms.file-component label="Grid Image" name="image_url" dimension='max. 150 x 100px' spanStar='*' />
            </div>

            <div class="row">
                <x-forms.text-input label="Title" type="text" name="title" placeholder="Enter title" spanStar='' />
                <x-forms.text-input label="Subtitle" type="text" name="subtitle" placeholder="Enter subtitle" spanStar='' />
            </div>

            <div class="row">
                <x-forms.text-input label="Banner Link URL" type="text" name="link_url" placeholder="Enter link URL" spanStar='' />
                <div class="form-group col-6">
                    <label for="display_order">Display Order <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="display_order" id="display_order" value="{{ old('display_order') }}" placeholder="Enter Sorting number">
                    <small class="text-muted">Taken numbers: <span id="taken-numbers"></span></small>
                    @error('display_order')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <hr>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
@push('script')
    

<script>
    $(document).ready(function() {
        var existingDisplayOrders = @json($all_grid_display_orders);

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
