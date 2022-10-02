@php($styles = [
    '/vendor/authanram/laravel-dragula/vendor/dragula/dragula.min.css',
])

@foreach($styles as $src)
    <link rel="preload" href="{{ $src }}" as="style" />
    <link rel="stylesheet" href="{{ $src }}" />
@endforeach
