@props(['div' => false])
<{{ $div ? 'div' : 'section' }} {{ $attributes->merge(['class' => 'max-w-full sm:max-w-xl md:max-w-2xl lg:max-w-5xl xl:max-w-6xl 2xl:max-w-7xl mx-auto']) }}>
    {{ $slot }}
</{{ $div ? 'div' : 'section' }}>