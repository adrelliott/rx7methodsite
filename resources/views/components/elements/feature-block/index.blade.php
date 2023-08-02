<x-layouts.section-wide  class="not-prose" id="features">

    <div class="relative mx-auto px-4 lg:py-20 md:px-6 md:py-16 py-12 text-default max-w-5xl">
        <div class="text-center max-w-3xl md:mb-12 md:mx-auto mb-8">
            
            <p class="font-bold dark:text-blue-200 text-base text-secondary tracking-wide uppercase">
                {{ $subhead ?? 'Define a subhead' }}
            </p>

            <h2 class="font-bold font-heading leading-tighter tracking-tighter md:text-4xl text-3xl text-heading">
                {{ $headline ?? 'Define a headline' }}
            </h2>

            @isset($description)
                <p class="text-muted text-xl mt-4">
                    {{ $description }}
                </p>
            @endisset

        </div>

        <div class="mx-auto gap-8 gap-y-12 grid sm:grid-cols-2">
            {{ $slot }}
        </div>

    </div>
</x-layouts.section-wide>