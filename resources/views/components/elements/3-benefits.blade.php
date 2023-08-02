@props([
    'benefits' => [
        [
            'icon' => 'briefcase',
            'text' => 'Improve your Recruitment', 
        ],
        [
            'icon' => 'magnifier',
            'text' => 'Increase your engagement',
        ],
        [
            'icon' => 'users',
            'text' => 'Empower your Managers',
        ],
    ]
])
<x-layouts.section-full-width class="py-4 sm:py-6 md:py-8 sm:px-2 md:px-4 lg:px-12 xl:px-48 mb-2 sm:mb-4 lg:mb-8 xl:mb-10 w-full md:w-10/12 ">
    <div class="grid grid-cols-3 gap-7 not-prose">
        @foreach ($benefits as $benefit)
        <div class="bg-slate-700 py-8 text-white flex flex-col gap-2 items-center rounded-md">
            <span>
                <x-icon :path="$benefit['icon']" class="w-8 h-8" />
            </span>
            <p class="text-xl text-center font-thin xleading-none xmb-0">
                {{ $benefit['text'] }}
            </p>
        </div>    
        @endforeach
        
    </div>
</x-layouts.section-wide>