@props(['color' => 'primary', 'size' => 'md', 'type' => 'button', 'href' => null, 'target' => null, 'ghost' => false, 'icon' => null])
<a class="btn btn-primary sm:mb-0 w-full" href="{{ $href }}" target="{{ $target }}">
    <div class="inline-flex items-center justify-center rounded-md border border-color-primary
        @if($ghost) 
            bg-transparent text-primary hover:bg-primary hover:text-white
        @else 
            bg-primary text-white hover:bg-primary-dark 
        @endif
        p-y-3.5 px-6
        text-center text-base  
    ">

    @isset($icon)
        <div class="mr-2">
            {{ $icon }}
        </div>
    @endisset

    {{ $slot }}

    </div>
</a>

  
{{--  
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / .1), 0 2px 4px -2px rgb(0 0 0 / .1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow);
  transition-property: color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;
  transition-property: color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;
  transition-property: color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;
  transition-timing-function: cubic-bezier(.4,0,.2,1);
  transition-duration: .2s;
  transition-timing-function: cubic-bezier(.4,0,1,1); --}}