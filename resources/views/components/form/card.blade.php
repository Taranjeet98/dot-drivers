@props([
    'title' => null,
])

<div {{ $attributes->merge([]) }}>

    {{ $slot }}
</div>
