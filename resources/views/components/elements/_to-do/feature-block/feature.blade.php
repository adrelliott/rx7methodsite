@props(['icon' => 'lightbulb'])
<div class="flex flex-row max-w-md">
    <div class="flex justify-center">
        <x-icon 
            :path="$icon" 
            class="bg-primary md:p-3  mr-4 p-2 rounded-full text-white"
        />
    </div>
    <div>
        <h3 class="font-bold text-xl md:text-[1.3rem]">
            {{ $title ?? 'Define a title' }}
        </h3>
        
        @isset($description)
            <p class="text-muted mt-3">
                {{ $description }}
            </p>
        @endisset
        
    </div>
</div>