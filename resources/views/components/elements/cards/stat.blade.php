@props(['textColor' => 'text-primary', 'number' => 'Define a slot named number', 'description' => 'Define a slot named description'])
<div {{ $attributes->merge(['class' => 'text-center mx-auto']) }}>
    <div class="font-heading {{ $textColor }} font-bold text-7xl">
        {{ $number }}
    </div>
    <div class="text-sm font-medium uppercase tracking-widest text-gray-800 lg:text-base">
        {{ $description }}
    </div>
</div>