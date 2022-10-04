@props(['id' => (string) \Illuminate\Support\Str::ulid()])

<div {{ $attributes->merge(['id' => $id]) }}>
    {{ $slot }}
</div>

@push('laravel-dragula-scripts')
    <script>
    </script>
@endpush
