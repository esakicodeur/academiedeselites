@php
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $label ??= ucfirst($name);
@endphp

<p @class(["form-group", $class])>
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <select name="{{ $name }}[]" id="{{ $name }}" multiple class="form-control @error($name) is-invalid @enderror" >
        @foreach ($tags as $k => $v)
            <option @selected($value->contains($k)) value="{{ $k }}">{{ $v }}</option>
        @endforeach
    </select>
    @error($name)
        <span class="invalid-feedback">
            {{ $message }}
        </span>
    @enderror
</p>
