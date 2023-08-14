@props(['div' => false])
<{{ $div ? 'div' : 'section' }} {{ $attributes->merge(['class' => 'max-w-xs sm:max-w-lg md:max-w-xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl mx-auto']) }}>
    <div class="max-w-full md:max-w-3xl lg:max-w-4xl mx-auto">
        {{ $slot }}
    </div>
</{{ $div ? 'div' : 'section' }}>