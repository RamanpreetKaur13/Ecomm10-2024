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
            'card_title' => 'Add Grid Card',
            'back_link' => route('admin.grid-cards.index'),
        ])
        <form action="{{ route('admin.grid-cards.update', $gridCard->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" value="{{  $gridCard->id }}" name="id">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="homepage_section_id">Section Type <span class="text-danger">*</span> </label>
                        <select class="form-control" id="homepage_section_id" name="homepage_section_id">
                            <option value="">select</option>

                            @foreach ($homepage_section as $section)
                                <option value="{{ $section->id }}" @if ($section->id == $gridCard->homepage_section_id) selected @endif>
                                    {{ $section->name }}</option>
                            @endforeach
                            {{-- <option value="Fixed" @if (old('homepage_section_id') === 'Fixed') selected @endif>
                            Fixed</option>
                        <option value="Slider" @if (old('homepage_section_id') === 'Slider') selected @endif>
                            Slider</option> --}}
                        </select>
                        @error('homepage_section_id')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <x-forms.file-component label="Grid Image" name="image_url" dimension='max. 150 x 100px' spanStar='*' />

                </div>

                {{-- <div class="row"> --}}

                {{-- <div class="form-group col-6">
                    <label for="type">Banner Type <span class="text-danger">*</span> </label>
                    <select class="form-control" id="type" name="type" >
                        <option value="">select</option>
                        <option value="Fixed" @if (old('type') === 'Fixed') selected @endif>
                            Fixed</option>
                        <option value="Slider" @if (old('type') === 'Slider') selected @endif>
                            Slider</option>
                    </select>
                    @error('type')
                    <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div> --}}

                {{-- </div> --}}

                <div class="row">

                    <div class="form-group col-6">
                        <label for="alt">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title"
                            value="{{ old('title', $gridCard->title) }}">

                            @error('title')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group col-6">
                        <label for="subtitle">Subtitle <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle"
                            placeholder="Enter subtitle" value="{{ old('title', $gridCard->subtitle) }}">
                            @error('subtitle')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="link_url">Link URL <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="link_url" name="link_url"
                            placeholder="Enter link url" value="{{ old('link_url', $gridCard->link_url) }}">

                            @error('link_url')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="display_order">Display Order <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="display_order" name="display_order"
                            placeholder="Enter display order" value="{{ old('display_order', $gridCard->display_order) }}">
                            <small class="text-muted">Taken numbers: <span id="taken-numbers"></span></small>
                            @error('display_order')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                        </div>


                </div>

                <div class="form-group col-6">
                    <div class="form-group col-6 d-none">
                        <label for="status">gridCard Status <span class="text-danger">*</span></label>
                        <input type="hidden" class="form-control" id="status"
                            style="background-color: #e9ecef80; color:#333;" name="status"
                            placeholder="Enter Banner status" value="{{ $gridCard->status }}">
                    </div>

                    @if (!empty($gridCard->image_url))
                        <div class="img-wrap">
                            
                            <a href="{{ asset('storage/front/images/gridCards/' . $gridCard->image_url) }}" target="_blank">
                                <img src="{{ asset('storage/front/images/gridCards/' . $gridCard->image_url) }}" alt=""
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
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
        </form>
    </div>

    @push('script')
    

    <script>
        $(document).ready(function() {
            var existingDisplayOrders = @json($all_carousel_item_orders);
    
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