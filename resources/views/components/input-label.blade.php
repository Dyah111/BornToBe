@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-lg text-black']) }}>
    {{ $value ?? $slot }}
</label>
