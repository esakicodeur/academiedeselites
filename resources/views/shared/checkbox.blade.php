@php
 $class ??= null;
@endphp

<p @class(["form-check form-switch", $class])>
    <input type="hidden" name="{{ $name }}">
    <input @checked(old($name, $value ?? false)) type="checkbox" name="{{ $name }}" value="1" class="form-check-input @error($name) is-invalid @enderror" role="switch" id="{{ $name }}">
    <label class="form-check-label" for="form-label">{{ $label }}</label>
    @error($name)
        <span class="invalid-feedback">
            {{ $message }}
        </span>
    @enderror
</p>
