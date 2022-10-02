@props(['id' => (string) \Illuminate\Support\Str::ulid(), 'script' => null])

@php(resolve(\Authanram\LaravelDragula\LaravelDragulaContract::class)->registerContainer(
    $id,
    $script && $script->isNotEmpty() ? $script->toHtml() : 'dragula()',
))

<div {{ $attributes->merge(['id' => $id]) }}>
    {{ $slot }}
</div>
