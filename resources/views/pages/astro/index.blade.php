<x-layouts.public hideNav="true">
    
    <x-demo.hero-01 />

    <x-demo.ribbon />

    <x-demo.features />

    <x-demo.checklist />

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

    <x-layouts.section-full-width class="bg-slate-100">
        <x-layouts.section-wide div="true">
            <x-layouts.intro>
                <x-slot name="subhead">
                    Components
                </x-slot>
                <x-slot name="heading">
                    Most used widgets
                </x-slot>
                Provides frequently used components for building websites using Tailwind CSS
            </x-layouts.intro>
    
            <x-elements.cards class="mt-12" xflex="true">
                <x-elements.cards.card>
                    <div class="flex flex-col">
                        <x-slot name="icon">
                            <x-icon path="lightbulb" class="text-primary" />
                        </x-slot>
                        <x-slot name="heading">
                            Headers
                        </x-slot>
                        <x-slot name="content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sunt deleniti autem soluta eaque ut, dignissimos ipsa repellat hic quia cum vitae laboriosam veritatis, rem nostrum, qui velit. Vero, incidunt.
                        </x-slot>
                    </div>
                    
                </x-elements.cards.card>
                <x-elements.cards.card>
                    <div class="flex flex-col">
                        <x-slot name="icon">
                            <x-icon path="lightbulb" class="text-primary" />
                        </x-slot>
                        <x-slot name="heading">
                            Headers
                        </x-slot>
                        <x-slot name="content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sunt deleniti autem soluta eaque ut, dignissimos ipsa repellat hic quia cum vitae laboriosam veritatis, rem nostrum, qui velit. Vero, incidunt.
                        </x-slot>
                    </div>
                    
                </x-elements.cards.card>
                <x-elements.cards.card>
                    <div class="flex flex-col">
                        <x-slot name="icon">
                            <x-icon path="lightbulb" class="text-primary" />
                        </x-slot>
                        <x-slot name="heading">
                            Headers
                        </x-slot>
                        <x-slot name="content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sunt deleniti autem soluta eaque ut, dignissimos ipsa repellat hic quia cum vitae laboriosam veritatis, rem nostrum, qui velit. Vero, incidunt.
                        </x-slot>
                    </div>
                    
                </x-elements.cards.card>
                <x-elements.cards.card>
                    <div class="flex flex-col">
                        <x-slot name="icon">
                            <x-icon path="lightbulb" class="text-primary" />
                        </x-slot>
                        <x-slot name="heading">
                            Headers
                        </x-slot>
                        <x-slot name="content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sunt deleniti autem soluta eaque ut, dignissimos ipsa repellat hic quia cum vitae laboriosam veritatis, rem nostrum, qui velit. Vero, incidunt.
                        </x-slot>
                    </div>
                    
                </x-elements.cards.card>
                <x-elements.cards.card>
                    <div class="flex flex-col">
                        <x-slot name="icon">
                            <x-icon path="lightbulb" class="text-primary" />
                        </x-slot>
                        <x-slot name="heading">
                            Headers
                        </x-slot>
                        <x-slot name="content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sunt deleniti autem soluta eaque ut, dignissimos ipsa repellat hic quia cum vitae laboriosam veritatis, rem nostrum, qui velit. Vero, incidunt.
                        </x-slot>
                    </div>
                    
                </x-elements.cards.card>
                <x-elements.cards.card>
                    <div class="flex flex-col">
                        <x-slot name="icon">
                            <x-icon path="lightbulb" class="text-primary" />
                        </x-slot>
                        <x-slot name="heading">
                            Headers
                        </x-slot>
                        <x-slot name="content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sunt deleniti autem soluta eaque ut, dignissimos ipsa repellat hic quia cum vitae laboriosam veritatis, rem nostrum, qui velit. Vero, incidunt.
                        </x-slot>
                    </div>
                    
                </x-elements.cards.card>
            </x-elements.cards>
        </x-layouts.section-wide>
    </x-layouts.section-full-width>

    <x-layouts.section-full-width class="bg-slate-100">
        <x-layouts.section-narrow div="true">
            <x-layouts.intro>
                <x-slot name="subhead">
                    Inside Template
                </x-slot>
                <x-slot name="heading">
                    And what's inside..?
                </x-slot>
                Ne dicta praesent ocurreret has, diam theophrastus at pro. Eos etiam regione ut, persius eripuit quo id. Sit te euismod tacimates.
            </x-layouts.intro>
    
            <x-elements.cards flex="true">
                <x-elements.cards.card>
                    <h3 class="text-center mb-4">
                        The Old Way
                    </h3>
                    <x-elements.checklist class="space-y-4">
                        <x-elements.checklist.item bgColor="bg-red-500" icon="cross" class="mb-2">
                            <x-slot name="heading">
                                Per ei quaeque sensibus
                            </x-slot>
                            Ex usu illum iudico molestie. Pro ne agam facete mediocritatem, ridens labore facete mea ei. Pro id apeirian dignissim.
                        </x-elements.checklist.item>
                        
                        <x-elements.checklist.item bgColor="bg-red-500" icon="cross" class="mb-2">
                            <x-slot name="heading">
                                Per ei quaeque sensibus
                            </x-slot>
                            Ex usu illum iudico molestie. Pro ne agam facete mediocritatem, ridens labore facete mea ei. Pro id apeirian dignissim.
                        </x-elements.checklist.item>
                        
                        <x-elements.checklist.item bgColor="bg-red-500" icon="cross" class="mb-2">
                            <x-slot name="heading">
                                Per ei quaeque sensibus
                            </x-slot>
                            Ex usu illum iudico molestie. Pro ne agam facete mediocritatem, ridens labore facete mea ei. Pro id apeirian dignissim.
                        </x-elements.checklist.item>
                    </x-elements.checklist>
                </x-elements.cards.card>
                <x-elements.cards.card>
                    <h3 class="text-center mb-4">
                        The New Way
                    </h3>
                    <x-elements.checklist class="space-y-4">
                        <x-elements.checklist.item bgColor="bg-green-500" icon="checkmark" class="mb-2">
                            <x-slot name="heading">
                                Per ei quaeque sensibus
                            </x-slot>
                            Ex usu illum iudico molestie. Pro ne agam facete mediocritatem, ridens labore facete mea ei. Pro id apeirian dignissim.
                        </x-elements.checklist.item>
                        
                        <x-elements.checklist.item bgColor="bg-green-500" icon="checkmark" class="mb-2">
                            <x-slot name="heading">
                                Per ei quaeque sensibus
                            </x-slot>
                            Ex usu illum iudico molestie. Pro ne agam facete mediocritatem, ridens labore facete mea ei. Pro id apeirian dignissim.
                        </x-elements.checklist.item>
                        
                        <x-elements.checklist.item bgColor="bg-green-500" icon="checkmark" class="mb-2">
                            <x-slot name="heading">
                                Per ei quaeque sensibus
                            </x-slot>
                            Ex usu illum iudico molestie. Pro ne agam facete medi ocr itatem, ridens labore facete mea ei. Pro id apeirian dignissim.
                        </x-elements.checklist.item>
                        
                    </x-elements.checklist>
                </x-elements.cards.card>
            </x-elements.cards>
        </x-layouts.section-narrow>
    </x-layouts.section-full-width>
    
    <x-layouts.section-wide>
        <x-layouts.intro>
            <x-slot name="subhead">
                FAQs
            </x-slot>
            <x-slot name="heading">
                Frequently Asked Questions
            </x-slot>
            Duis turpis dui, fringilla mattis sem nec, fringilla euismod neque. Morbi tincidunt lacus nec tortor scelerisque pulvinar.
        </x-layouts.intro>
        <x-elements.faqs>
            <x-elements.faqs.faq>
                <x-slot name="question">
                    Why astrowind
                </x-slot>
                Michael Knight a young loner on a crusade to champion the cause of the innocent. The helpless. The powerless in a world of criminals who operate above the law. Here he comes Here comes Speed Racer. He's a demon on wheels.
            </x-elements.faqs.faq>
            <x-elements.faqs.faq>
                <x-slot name="question">
                    How to install the Astro + Tailwind CSS template?
                </x-slot>
                Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.
            </x-elements.faqs.faq>
            <x-elements.faqs.faq>
                <x-slot name="question">
                    What is something that you would like to try again?
                </x-slot>
                A business big enough that it could be listed on the NASDAQ goes belly up. Disappears! It ceases to exist without me. No, you clearly don't know who you're talking to, so let me clue you in.
            </x-elements.faqs.faq>
            <x-elements.faqs.faq>
                <x-slot name="question">
                    What do I need to start?
                </x-slot>
                Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds. Many say exploration is part of our destiny, but it’s actually our duty to future generations.
            </x-elements.faqs.faq>
            <x-elements.faqs.faq>
                <x-slot name="question">
                    If you could only ask one question to each person you meet, what would that question be?
                </x-slot>
                This is not about revenge. This is about justice. A lot of things can change in twelve years, Admiral. Well, that's certainly good to know. About four years. I got tired of hearing how young I looked.
            </x-elements.faqs.faq>
        </x-elements.faqs>

    </x-layouts.section-wide>

    <x-layouts.section-wide>
        <x-elements.columns.four-cols class="gap-10">
            <x-slot name="column1">
                <x-elements.cards.stat number="124k" description="downloads" />
            </x-slot>
            <x-slot name="column2">
                <x-elements.cards.stat number="200" description="clients" />
            </x-slot>
            <x-slot name="column3">
                <x-elements.cards.stat number="1200" description="hours" />
            </x-slot>
            <x-slot name="column4">
                <x-elements.cards.stat number="£2m" description="savings" />
            </x-slot>
        </x-elements.columns.four-cols>
    </x-layouts.section-wide>





    

    


</x-layouts.public>