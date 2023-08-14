@props(['heading' => null, 'content' => null, 'icon' => null])
<div {{ $attributes->merge(['class' => 'border rounded-md border-slate-200 bg-white p-4 lg:p-6']) }}>
    
    @isset($icon)
        {{ $icon }}
    @endisset

    @isset($heading)
        <h3 class="text-xl font-bold">
            {{ $heading }}
        </h3>
    @endisset

    @isset($content)
        <p class="pb-0 mb-0">
            {{ $content }}                    
        </p>
    @endisset

    {{ $slot }}

</div>
