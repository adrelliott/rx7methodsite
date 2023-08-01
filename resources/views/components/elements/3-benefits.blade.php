@props([
    'benefits' => [
        [
            'icon' => 'icons.briefcase',
            'text' => 'Improve your Recruitment', 
        ],
        [
            'icon' => 'icons.magnifier',
            'text' => 'Increase your engagement',
        ],
        [
            'icon' => 'icons.users',
            'text' => 'Empower your Managers',
        ],
    ]
])
<x-layouts.section-wide>
    <div class="grid grid-cols-3 gap-7 not-prose">
        @foreach ($benefits as $benefit)
        <div class="bg-slate-700 py-8 text-white flex flex-col gap-2 items-center rounded-md">
            <span>
                <x-dynamic-component :component="$benefit['icon']" class="w-8 h-8" />    
            </span>
            <p class="text-xl text-center font-thin xleading-none xmb-0">
                {{ $benefit['text'] }}
            </p>
        </div>    
        @endforeach
        
    </div>
</x-layouts.section-wide>