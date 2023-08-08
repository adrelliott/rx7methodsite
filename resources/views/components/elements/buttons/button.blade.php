@props(['href' => null, 'target' => null, 'ghost' => false, 'icon' => null])
<a 
    class="
        btn tracking-tight font-semibold xlg:font-light py-2 px-4 rounded border border-primary
        @if($ghost) 
            bg-transparent text-primary hover:bg-primary hover:text-white
        @else
            bg-primary text-white hover:bg-primary-dark hover:border-primary-dark  
        @endif
    " 
    href="{{ $href }}" 
    target="{{ $target }}"
>
    <div class="inline-flex align-middle justify-center">
        @isset($icon)
            <x-icon :path="$icon" class="w-6 h-6 -mb-4 font-thin" strokeWidth="1" viewBox="0 0 28 28"/>    
        @endisset
        {{ $slot }}
    </div>
</a>