@props(['question' => 'Define a slot name=question', 'icon' => 'chevron-right', 'bgColor' => '', 'textColor' => 'text-primary'])
<div class="flex ">
    <div class="flex-shrink-0">
        <div class="flex h-7 w-7 items-center justify-center rounded-full  {{ $textColor }} {{ $bgColor }}">
            <x-icon 
                path="{{ $icon }}"
                width="1em" height="1em" viewBox="0 0 24 24" 
                class="w-5 h-5"
            />
        </div>
    </div>
    <div>
        <h3 class="text-xl font-bold my-0">
            {{ $question }}
        </h3>
        <p class="text-muted mt-2">
            {{ $slot }}
        </p>
    </div>
</div>
