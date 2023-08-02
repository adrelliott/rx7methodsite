@props(['icon' => 'check-circle'])
<li class="flex items-start leading-7 mb-1.5 text-base text-left">
    <div class="flex items-center justify-center bg-green-700 border-2 border-green-700 h-4 w-4 mr-1.5 mt-1.5 rounded-full">
        <x-icon :path="$icon" class="h-5 w-5 font-bold text-white" />
    </div>
    {{ $slot }}
</li>