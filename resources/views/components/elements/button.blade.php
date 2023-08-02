@props(['icon' => false, 'href' => '/', 'label' => 'Define button text'])
<div class="not-prose">
    <a
        class="bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-slate-400 focus:ring-offset-2 focus:ring-offset-slate-50 text-base text-white font-semibold h-12 px-6 space-x-6 rounded-lg w-full flex items-center justify-center sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400 "
        href="{{ $href }}">
        @if ($icon)
            <div>
                X
            </div>
        @endif
        <div>
            {{ $label }}
        </div>
    </a>
</div>