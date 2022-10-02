@props($scripts = [
    '/vendor/authanram/laravel-dragula/vendor/dragula-3.7.3/dragula.min.js',
    //'/vendor/authanram/laravel-dragula/laravel-dragula.mjs',
])

@foreach($scripts as $src)
    <link rel="preload" href="{{ $src }}" as="script" />
    <script src="{{ $src }}" defer></script>
@endforeach

@php($containers = resolve(\Authanram\LaravelDragula\LaravelDragulaContract::class)->getContainers())

<script>
    document.addEventListener('DOMContentLoaded', () => {
        @foreach($containers as $container)
            @php($selectors = [])
            @foreach($container['element_ids'] as $elementId)
                @php($selectors[] = "document.querySelector('#$elementId')")
            @endforeach
            {!! strip_tags(
                str_replace(
                    'dragula()',
                    'dragula(['.implode(',', $selectors).'])',
                    $container['script'],
                ),
            ) !!}
            @if($loop->last === false)
                {!! "\n" !!}
            @endif
        @endforeach
    });
</script>
