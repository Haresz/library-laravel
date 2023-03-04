<div class="mb-3">
    <label class="my-2" for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{{ $value }}" placeholder="{{ $placeholder }}" {{ $disabled ? 'disabled' : '' }}>
</div>
