@props(['headline' => 'Define <x-slot name="headline"', 'subhead' => null, 'button' => null])
<div class="w-full md:max-w-5xl lg:max-w-3xl xl:max-w-4xl mx-auto px-2 md:px-4 lg:px-6 xmb-10 xmd:mb-16 py-6 md:py-12 lg:py-20">
    <div class="">
        <div class="text-center">
            
            <h1 class="hero">
                {{ $headline }}
            </h1>

            @isset($lead)
                <p class="text-2xl text-muted">
                    {{ $lead }}
                </p>
            @endisset

            {{ $slot }}

            @isset($button)
                {{ $button }}
            @endisset

        </div>
    </div>
</div>
