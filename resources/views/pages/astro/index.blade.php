<x-layouts.public hideNav="true">
    
    <x-demo.hero-01 />

    <x-demo.ribbon />

    <x-demo.features />

    <x-demo.checklist />

    <x-demo.old-way-new-way />

    <x-layouts.section-wide>
        <x-demo.image-left />
        <x-demo.image-right />
    </x-layouts.section-wide>

    <x-layouts.section-wide>
        <x-demo.25-75 />
        <x-demo.33-66 />
        <x-demo.50-50 />
        <x-demo.66-33 />
        <x-demo.75-25 />
    </x-layouts.section-wide>

    <x-layouts.section-wide>
        <x-elements.columns.two-cols class="mx-auto">
            <x-slot name="column1">
                <h2>
                    Get your dream website up and running in no time with AstroWind.
                </h2>
                <x-elements.steps class="mt-12">
                    <x-elements.steps.item stepNo="1" bgColor="bg-primary" connectingLine="true">
                        <x-slot name="heading">
                            Step 1: Download
                        </x-slot>
                        <p>
                            shouldbealine Kickstart with GitHub! Either fork the AstroWind template or simply click 'Use this template'. Your canvas awaits, ready for your digital masterpiece. In just a few clicks, you've already set the foundation.
                        </p>
                    </x-elements.steps.item>
                    <x-elements.steps.item stepNo="2" bgColor="bg-primary"  connectingLine="true">
                        <x-slot name="heading">
                            Step 2: Add content
                        </x-slot>
                        <p>
                            Pour your vision into it. Add images, text, and all that jazz to breathe life into your digital space. Remember, it's the content that tells your story, so make it captivating.
                        </p>
                    </x-elements.steps.item>
                    <x-elements.steps.item stepNo="3" bgColor="bg-primary"  connectingLine="true">
                        <x-slot name="heading">
                            Step 3: Customise styles
                        </x-slot>
                        <p>
                            Give it your personal touch. Tailor colors, fonts, and layouts until it feels just right. Your unique flair, amplified by AstroWind! Precision in design ensures a seamless user experience.
                        </p>
                    </x-elements.steps.item>
                    <x-elements.steps.item stepNo="4" lastStep="true" bgColor="bg-primary">
                        <x-slot name="heading">
                            Step 4: Ready!
                        </x-slot>
                    </x-elements.steps.item>
                </x-elements.steps>
            </x-slot>
            <x-slot name="column2">
                <img src="/assets/img/static/clock.jpeg" alt="" class="object-fill">
            </x-slot>
        </x-elements.columns.two-cols>
    </x-layouts.section-wide>



    

    


</x-layouts.public>