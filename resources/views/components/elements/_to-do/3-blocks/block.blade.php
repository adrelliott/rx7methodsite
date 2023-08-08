@props(['icon' => 'lightbulb'])
<div
    {{ $attributes->merge(['class' =>  'bg-slate-700 py-8 text-white flex flex-col gap-2 items-center rounded-md']) }}
>
    <span>
        <x-icon :path="$icon" class="w-8 h-8" />
    </span>
    <p class="text-xl text-center font-thin xleading-none xmb-0">
        {{ $title ?? 'Define a title' }}
    </p>
</div>