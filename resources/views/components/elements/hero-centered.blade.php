@props(['buttonText', 'buttonLink'])
<x-layouts.section-hero class="">
    <h1
        class="text-slate-900 font-black text-4xl sm:text-5xl lg:text-7xl text-center font-hubot dark:text-white leading-10">
        {{ $headline ?? 'Define a headline' }}    
    </h1>
    <p class="mt-6 text-2xl mb-2 text-slate-600 text-center max-w-3xl mx-auto dark:text-slate-400">
        {{ $subheadline ?? 'Define a subheadline' }}
    </p>
    @isset($buttonText)
        <x-elements.button :href="$buttonLink" :label="$buttonText" />
    @endisset
</x-layouts.section-hero>
