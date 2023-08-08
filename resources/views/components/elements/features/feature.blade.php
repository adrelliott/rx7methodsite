@props(['headline' => 'Define a slot with name=headline', 'icon' => 'lightbulb'])
<div class="flex flex-row max-w-md">
    <div class="flex justify-center">
        <x-icon 
            name="{{ $icon }}" 
            width="1em" height="1em" viewBox="0 0 24 24"
            class="text-white bg-primary rounded-full w-10 h-10 p-2 md:w-12 md:h-12 md:p-3 mr-4 rtl:ml-4 rtl:mr-0"
        />
    </div>
    <div>
        <h3 class="text-xl md:text-2xl mt-0 mb-0">
            {{ $headline }}
        </h3>
        <p class="text-muted">
            {{ $slot }}
        </p>
    </div>
</div>
