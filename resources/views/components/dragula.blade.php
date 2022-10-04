@props(['id'])

<div {{ $attributes->merge(['id' => $id]) }}>
    {{ $slot }}
</div>
