@props(['id'])

@php(resolve(\Authanram\LaravelDragula\LaravelDragulaContract::class)->registerElement($id))

<div {{ $attributes->merge(['id' => $id]) }}>
    {{ $slot }}
</div>
