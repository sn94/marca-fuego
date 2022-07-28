@props(['value'])

<label {{ $attributes->merge(['class' => 'form-label fs-5 fw-bold']) }}>
    {{ $value ?? $slot }}
</label>
