<div class="mb-3">
    <label class="my-2" for="{{ $name }}">{{ $label }}</label>
    <div>
        @if ($type == 'file')
            <img class="show-image-sampul img-fluid mb-3 col-sm-5" src="{{ $image }}" style="max-width: 12.5em; max-height: 12.5em;">
        @endif
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" class="logo-sampul form-control" aria-label="Default" @if($type == 'file') onchange="ShowImageSampul()" @endif aria-describedby="inputGroup-sizing-default" value="{{ $value }}" placeholder="{{ $placeholder }}" {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }}>
    </div>
</div>
