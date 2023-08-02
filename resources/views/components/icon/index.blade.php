@props(['path' => 'lightbulb'])
<svg 
    {{ $attributes->merge(['class' => 'h-10 w-10 md:h-12 md:w-12']) }}
    viewBox="0 0 24 24">
    <x-dynamic-component :component="'icon.'.$path" />
</svg>
