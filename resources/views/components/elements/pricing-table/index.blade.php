@props(['packages' => 3])

<div class="mx-auto md:px-6 text-default  max-w-6xl px-4 ">
    <div class="max-w-3xl mb-8 md:mb-12 md:mx-auto text-center">
        
        <p class="font-bold uppercase dark:text-blue-200 text-base text-secondary tracking-wide">
            {{ $subhead ?? 'Pricing' }}
        </p>
        
        <h2 class="font-bold font-heading leading-tighter md:text-4xl text-3xl text-heading tracking-tighter">
            {{ $headline ?? 'Our Packages' }}
        </h2>
        
        @isset($description)
            <p class="text-muted mt-4 text-xl">
                {{ $description }}
            </p>
        @endisset
        
    </div>

    <div class="flex justify-center items-stretch gap-4">
        {{ $slot }} 
    </div>
    
</div>
