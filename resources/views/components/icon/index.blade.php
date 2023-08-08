@props(['path' => 'lightbulb', 'strokeWidth' => 4, 'viewBox' => '0 0 24 24', 'height' => 'h-10', 'width' => 'w-10'])
<svg 
    {{ $attributes->merge(['class' => 'h-10 w-10']) }}
    viewBox="{{ $viewBox }}">
    <x-dynamic-component :component="'icon.'.$path" />
</svg>
