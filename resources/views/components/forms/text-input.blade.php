
<div class="form-group col-6">
    <label for="{{ $name }}">{{ $label }} <span class="text-danger">{{ $spanStar }}</span></label>
    <input type="{{ $type }}" class="form-control" id="{{ $name }}" name="{{ $name }}"
        placeholder="{{ $placeholder }}" value="{{ old($name) }}">
         @error($name)<span class="text-danger"> {{ $message }}</span>@enderror
</div>

