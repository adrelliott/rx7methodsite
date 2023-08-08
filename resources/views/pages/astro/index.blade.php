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

    <x-layouts.section-full-width class="bg-slate-100 py-4 ">
        <div class="px-4 sm:px-6 max-w-6xl mx-auto">
        <div class="text-center">
            <svg width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-4 inline-block align-text-bottom text-bold">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2">
                        <path d="M12 9h.01M3 5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5z" />
                        <path d="M11 12h1v4h1"></path>
                    </g>
                </svg>
            <span class="font-bold">Our Philosophy:</span> Simplicity, Best Practices and High Performance
        </div>
    </x-elements.ribbon>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-4 text-md text-center font-medium">
        <span class="font-bold">
            <svg width="1em" height="1em" viewBox="0 0 24 24" class="w-5 h-5 inline-block align-text-top">
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2">
                    <path d="M12 9h.01M3 5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5z" />
                    <path d="M11 12h1v4h1"></path>
                </g>
            </svg>
            Philosophy:
        </span> Simplicity, Best Practices and High Performance
</div>


</x-layouts.public>