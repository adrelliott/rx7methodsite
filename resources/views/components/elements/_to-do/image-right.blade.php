<div {{ $attributes->merge(['class' => 'flex flex-col md:flex-row items-center']) }}>
    <div class="md:w-1/2 flex flex-col items-center md:items-start lg:flex-grow text-center md:text-left md:mr-12">
        {{ $slot }}
    </div>
    <div class="w-5/6 md:w-1/3 mb-10 md:mb-0 md:ml-12 lg:ml-20">
        {{ $image }}
    </div>
</div>