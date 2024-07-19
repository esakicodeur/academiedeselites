@php
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $label ??= ucfirst($name);
@endphp

<p @class(["form-group", $class])>
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    @if ($type === 'textarea')
        <textarea class="form-control @error($name) is-invalid @enderror" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}">{{ old($name, $value) }}</textarea>
    @else
        <input class="form-control @error($name) is-invalid @enderror" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}">
    @endif
    @error($name)
        <span class="invalid-feedback">
            {{ $message }}
        </span>
    @enderror
</p>
