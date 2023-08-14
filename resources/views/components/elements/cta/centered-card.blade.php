<div {{ $attributes->merge(['class' => 'md:px-6 py-12 md:py-16 lg:py-20 text-default max-w-6xl mx-auto']) }}>
    <div class="max-w-3xl mx-auto text-center p-6 rounded-md shadow-xl">
        <div class="md:mx-auto text-center mb-0 md:mb-0">
            <h2 class="leading-tighter text-heading text-4xl md:text-4xl font-bold leading-tighter tracking-tighter mb-4 font-heading">
                {{ $heading ?? 'Define a slot named heading' }}
            </h2>
            <p class="mt-4 text-xl text-muted dark:text-slate-400">
                Be very surprised by these huge fake numbers you are seeing on this page. <br
                    class="hidden md:inline">Don't
                waste more time! :P
            </p>
        </div>
        <div class="mt-6 max-w-xs mx-auto">
            <x-elements.buttons.button href="{{ $buttonLink ?? '/' }}">
                {{ $buttonText ?? 'Define buttonText' }}
            </x-elements.buttons.button>
        </div>
    </div>
</div>
