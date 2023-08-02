@props(['flag', 'title', 'duration', 'price', 'featured' => false, 'currency' => '£'])
<div class="flex w-full col-span-3 lg:col-span-1 md:col-span-1 mx-auto sm:col-span-1 xl:col-span-1">
    <div class="flex w-full flex-col bg-white border-gray-200 dark:bg-slate-900 dark:border dark:border-slate-800 duration-300 ease-in-out justify-between max-w-sm pb-8 pt-10 px-6 relative rounded-md shadow-xl hover:shadow-2xl hover:border-gray-800 text-center transition">

        @isset($flag)
            <div class="absolute h-[100px] overflow-hidden right-[-5px] text-right top-[-5px] w-[100px] z-[1]">
                <span
                    class="font-bold text-white absolute after:absolute after:border-[3px] after:border-b-transparent after:border-l-transparent after:border-r-green-800 after:border-t-green-800 after:content-[''] after:right-0 after:top-full after:z-[-1] before:absolute before:border-[3px] before:border-b-transparent before:border-l-green-800 before:border-r-transparent before:border-t-green-800 before:content-[''] before:left-0 before:top-full before:z-[-1] bg-green-700 block leading-5 right-[-21px] rotate-45 shadow-[0_3px_10px_-5px_rgba(0,0,0,0.3)] text-[10px] text-center top-[19px] uppercase w-full">
                    {{ $flag }}
                </span>
            </div>
        @endisset

        <ul class="px-2 py-0">
            <li class="font-medium dark:text-slate-400 leading-6 text-center text-gray-800 text-xl tracking-wider uppercase">
                {{ $title ?? 'Define a title' }}
            </li>
            <li class="flex items-center justify-center font-semibold mb-2.5 mt-5 text-center">
                <span class="text-5xl">
                    {{ $currency }}
                </span>
                <span class="text-6xl">
                    {{ $price ?? '0' }}
                </span>
            </li>
            @isset($duration)
                <li class="text-base capitalize dark:text-slate-400 font-medium leading-6 mb-7 text-center text-gray-600">
                    {{ $duration }}
                </li>
            @endisset
            
            {{ $slot }}

        </ul>
    </div>
</div>