@props(['heading' => 'Define a slot with name heading', 'stepNo' => false, 'lastStep' => false, 'icon' => 'checkmark', 'bgColor' => 'bg-primary'])
<div class="flex align-bottom">
    <div class="flex flex-col items-center mr-2 lg:mr-4">
        <div class="flex-shrink-0">
            <div class="flex h-8 w-8 align-center items-center justify-center justify-items-center rounded-full text-white {{ $bgColor }}">
                @isset($stepNo)
                    <span class="font-black text-2xl m-0 pt-[1px] p-0 leading-none">
                        {{ $stepNo }}
                    </span>
                @else
                    <x-icon 
                        path="{{ $icon }}"
                        width="1em" height="1em" viewBox="0 0 24 24" 
                        class="w-5 h-5"
                    />
                @endisset
            </div>
        </div>
        @unless($lastStep)
            <div class="w-px h-full bg-slate-200"></div>
        @endunless
    </div>
    <div class="ml-2 lg:ml-3 pb-2 md:pb-6">
        <h4 class="text-lg font-semibold mt-0 mb-0 pb-0">
            {{ $heading }}
        </h4>
        <p class="mt-0 pt-0 mb-0 text-muted dark:text-slate-400">
            {{ $slot }}
        </p>
    </div>
</div>