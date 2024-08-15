{{-- <div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
</div> --}}

<div class="form-group {{ $col }}">
    <label for="{{ $name }}">{{ $label }} <span class="text-danger">{{ $spanStar }}</span></label>
    <textarea class="form-control summernote" name="{{ $name }}" id="{{ $name }}" rows="1" placeholder="{{ $placeholder }}"
        >{{ old($name) }}</textarea>
</div>

