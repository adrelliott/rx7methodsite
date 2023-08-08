<x-layouts.public hideNav="true">
    <x-elements.heroes.centered>
        
        <x-slot name="headline">
            Free template for <span
            class=" text-accent">Astro 2.0</span> + Tailwind CSS
        </x-slot>

        <x-slot name="subhead">
            AstroWind: Production-ready.
        </x-slot>

        <p>
            Suitable for Startups, Small Business, Sass Websites, Professional Portfolios, Marketing
        Websites, Landing Pages & Blogs.
        </p>

        <x-slot name="button">
            <div class="mx-auto max-w-3xl mt-6">
                <x-utilities.button-group>
                    <x-utilities.button icon="download">
                        Get Template
                    </x-utilities.button>
                    <x-utilities.button ghost="true">
                        Learn More
                    </x-utilities.button>
                </x-utilities.button-group>
            </div>
        </x-slot>
        
    </x-elements.heroes.centered>


    <h1
        class="font-bold font-heading leading-tighter mb-4 tracking-tighter dark:text-gray-200 md:text-6xl text-5xl">
        Hero centered <span class="hidden lg:inline">create your website<br>with</span> <span
            class="dark:text-white highlight text-accent">Astro 2.0</span> + Tailwind CSS</h1>
            <p class="text-muted text-xl dark:text-slate-300 mb-6"><span class="hidden sm:inline"><span
                class="font-semibold">AstroWind</span> is a free, customizable and production-ready
            template for Astro 2.0 + Tailwind CSS.</span> <span
            class="font-bold block mb-1 sm:hidden text-blue-600">AstroWind: Production-ready.</span>
        Suitable for Startups, Small Business, Sass Websites, Professional Portfolios, Marketing
        Websites, Landing Pages &amp; Blogs.</p>
        <div class="mx-auto max-w-3xl">
                
            <div class="flex flex-col flex-nowrap gap-4 m-auto max-w-xs sm:flex-row sm:justify-center sm:max-w-md">
                <div class="flex w-full sm:w-auto"><a class="w-full btn btn-primary sm:mb-0"
                        href="https://github.com/onwidget/astrowind" rel="noopener" target="_blank"><svg
                            class="h-5 w-5 -ml-1.5 mr-1" data-icon="tabler:download" height="1em"
                            viewBox="0 0 24 24" width="1em">
                            <use xlink:href="#ai:tabler:download"></use>
                        </svg>&nbsp; Get template</a></div>
                <div class="flex w-full sm:w-auto"><a class="w-full btn" href="#features">Learn more</a></div>
            </div>
        </div>
</x-layouts.public>