@props(['value'])

<label {{ $attributes->merge(['class' => 'text-sm text-secondary']) }}>
    {{ $value ?? $slot }}
</label>
