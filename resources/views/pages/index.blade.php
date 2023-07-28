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

</x-public>
