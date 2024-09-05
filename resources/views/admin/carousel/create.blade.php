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
        <form action="{{ route('admin.carousel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="homepage_section_id">Section Type <span class="text-danger">*</span> </label>
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

                    <x-forms.text-input label="Title" type="text" name="name" placeholder="Enter title"
                        spanStar='*' />
                </div>


                <div class="row">

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
