@props(['heading' => 'Define a slot with name heading', 'icon' => 'checkmark', 'bgColor' => 'bg-green-500'])
<div class="flex align-bottom">
    <div class="flex-shrink-0">
        <div class="flex h-7 w-7 items-center justify-center rounded-full text-white {{ $bgColor }}">
            <x-icon 
                path="{{ $icon }}"
                width="1em" height="1em" viewBox="0 0 24 24" 
                class="w-5 h-5"
            />
        </div>
    </div>
    <div class="ml-3">
        <h4 class="text-lg font-semibold mt-0 mb-0">
            {{ $heading }}
        </h4>
        <p class=" text-muted dark:text-slate-400">
            {{ $slot }}
        </p>
    </div>
</div>