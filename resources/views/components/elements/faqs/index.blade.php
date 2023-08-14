@props(['flex' => false])
<div {{ $attributes->merge(['class' => '']) }}>
    @if($flex)
        <div class="flex flex-col md:flex-row gap-4 md:gap-6">
    @else
        <div class="grid lg:grid-cols-2 gap-4 lg:gap-6">
    @endif
            {{ $slot }}
        </div>
</div>