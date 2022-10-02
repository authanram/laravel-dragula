@php($scripts = [
    '/vendor/authanram/laravel-dragula/vendor/dragula/dragula.min.js',
    '/vendor/authanram/laravel-dragula/laravel-dragula.mjs',
])

@foreach($scripts as $src)
    <link rel="preload" href="{{ $src }}" as="script" />
    <script src="{{ $src }}" defer></script>
@endforeach
