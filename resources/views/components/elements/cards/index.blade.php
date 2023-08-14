@props(['flex' => false])
<div {{ $attributes->merge(['class' => '']) }}>
    @if($flex)
        <div class="flex flex-col md:flex-row gap-4 md:gap-6">
    @else
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 sm:gap-y-8">
    @endif
            {{ $slot }}
        </div>
</div>