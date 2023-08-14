<div class="flex h-auto">
    <div class="flex flex-col p-4 md:p-6 rounded-md shadow-xl">
        <blockquote class="flex-auto">
            <p class="text-muted">
                "{{ $slot }}"
            </p>
        </blockquote>
        <hr class="border-slate-200 my-4">
        <div class="flex items-center">
            <img
                src="{{ $imageUrl ?? 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=2070&amp;q=80' }}"
                width="40" height="40"
                sizes="40px" style="object-fit: cover; object-position: top left; width: 40px; height: 40px;"
                class="h-10 w-10 rounded-full xborder border-2 border-primary"
                alt="{{ $name ?? 'Pass a $name' }}"
            >
            <div class="grow ml-3">
                <p class="text-base font-semibold mb-0">
                    {{ $name ?? 'Pass a $name' }}
                </p>
                <p class="text-xs text-muted mb-0">
                    {{ $title ?? 'Pass a $title' }}
                </p>
            </div>
        </div>
    </div>
</div>
