<x-public xhideNav="true" xhideFooter="true">
    <x-slot name="xpageHeader">
        This si page header
    </x-slot>

    <x-layouts.section-wide>
        <x-elements.centered-quote>
            <x-slot name="headline">
                This is a headline
            </x-slot>
            <x-slot name="quote">
                This is a quote
            </x-slot>
            <x-slot name="name">
                Donald Duck
            </x-slot>
            <x-slot name="position">
                CEO
            </x-slot>
        </x-elements.centered-quote>
    </x-layouts.section-wide>

    <x-layouts.section-wide>
        <article class="prose lg:prose-lg">
            <h1>
                This is a headline
            </h1>
            <p>
                This is a paragraph and it is a short one
            </p>
            {{-- a blockquote --}}
            <blockquote>
                <p>
                    This is a quote
                </p>
                <cite class="italic text-sm">
                    Donald Duck, CEO of Disney
                </cite>
            </blockquote>
            {{-- A very long paragraph --}}
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. <i>Sequi rerum magni</i>, illum consequatur vitae quas magnam labore consectetur, porro totam nulla <strong>perferendis unde quae cupiditate?</strong> Cumque minima esse odit itaque. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro natus veniam iste dolorum ipsam nobis officiis aut quae debitis officia suscipit eos quod, esse, sit, minima unde quibusdam. Eligendi, nihil.
            </p>
        </article>
    </x-layouts.section-wide>

</x-public>
