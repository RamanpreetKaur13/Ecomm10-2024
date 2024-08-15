@extends('admin.layout.layout')
@section('content')
    <div class="content-wrapper">
        @include('admin.includes.page_header', [
            'page_name' => 'Brands',
            'breadcrumb_link' => route('admin.dashboard'),
            'breadcrumb_item' => 'brands',
        ])
        @include('admin.includes.page_main_content', [
            'card_title' => 'Add Brands',
            'back_link' => route('admin.brands.index'),
        ])
        <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <x-forms.text-input label="Brand Name" type="text" name="brand_name"
                        placeholder="Enter brand name" spanStar='*'/>
                        <x-forms.file-component label="Brand Logo" name="brand_logo" spanStar='*'/>

                </div>
                <div class="row">
                    <x-forms.text-input label="Url" type="text" name="brand_url"
                        placeholder="Enter url ex:peter-england" spanStar='*'/>
                    <x-forms.text-input label="Brand Discount" type="number" name="brand_discount"
                        placeholder="Enter brand discount" spanStar='*' />
                </div>
                <div class="row">
                    <x-forms.file-component label="Brand Image" name="brand_image" spanStar='*' />
                    <x-forms.textarea-component label="Brand Description" name="brand_description" placeholder="Enter brand description" spanStar='*'/>
                </div>
                <hr>
                <div class="row mt-4">
                    <x-forms.text-input label="Meta title" type="text" name="meta_title"
                        placeholder="Enter meta title" spanStar='*'/>
                    <x-forms.text-input label="Meta Keyword" type="text" name="meta_keyword"
                        placeholder="Enter meta keyword" spanStar='*'/>
                </div>
                <div class="row">
                    <x-forms.textarea-component label="Meta Description" name="meta_description"
                        placeholder="Enter meta description" spanStar='*'/>
                </div>
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
@endsection
