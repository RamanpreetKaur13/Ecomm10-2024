@extends('admin.layout.layout')
@section('content')
<div class="content-wrapper">
    @include('admin.includes.page_header', [
    'page_name' => 'Banners',
    'breadcrumb_link' => route('admin.dashboard'),
    'breadcrumb_item' => 'banners',
    ])
      @include('alert_messages')
    @include('admin.includes.page_main_content', [
    'card_title' => 'Add Banners',
    'back_link' => route('admin.banners.index'),
    ])
    <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row">
                <x-forms.textarea-component col="col-12" label="Banner Title" name="title" placeholder="Enter Banner Title" spanStar='*' />
                
            </div>
            <div class="row">
                {{-- <x-forms.text-input label="Banner Title" type="text" name="title" placeholder="Enter Banner Title" id="title" /> --}}
                

                {{-- <textarea name="title" id="title"cols="30" rows="10"></textarea> --}}
                <x-forms.file-component label="Banner Image" name="image" dimension='3000 x 1200px' spanStar='*'/>
               
            </div>
            <div class="row">
                <x-forms.text-input label="Banner Image Link" type="text" name="link" placeholder="Enter image link" spanStar=''/>
                <div class="form-group col-6">
                    <label for="type">Banner Type <span class="text-danger">*</span> </label>
                    <select class="form-control" id="type" name="type" >
                        <option value="">select</option>
                        <option value="Fixed" @if (old('type')==='Fixed' ) selected @endif>
                            Fixed</option>
                        <option value="Slider" @if (old('type')==='Slider' ) selected @endif>
                            Slider</option>
                    </select>
                    @error('type')
                    <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="row">
                <x-forms.text-input label="Banner Alternative Text" type="text" name="alt"
                    placeholder="Enter Alternative Text"  spanStar='*'/>

                <x-forms.text-input label="Banner Sorting" type="text" name="sort" placeholder="Enter Sorting number" spanStar='*' />

            </div>
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
@endsection
