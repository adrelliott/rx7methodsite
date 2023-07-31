@props(['buttonText', 'buttonLink'])
<x-layouts.section-hero>
    <h1
        class="text-slate-900 font-extrabold text-4xl sm:text-5xl lg:text-6xl tracking-tight text-center font-hubot dark:text-white">
        {{ $headline ?? 'Define a headline' }}    
    </h1>
    <p class="mt-6 text-2xl text-slate-600 text-center max-w-3xl mx-auto dark:text-slate-400">
        {{ $subheadline ?? 'Define a subheadline' }}
    </p>
    @isset($buttonText)
        <x-elements.button :href="$buttonLink" :label="$buttonText" />
    @endisset
</x-layouts.section-hero>
