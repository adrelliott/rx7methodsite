<div {{ $attributes->merge(['class' => 'flex flex-col md:flex-row items-center w-2xl']) }}>
    <div class="mb-10 md:mb-0 md:mr-12 lg:mr-20">
        {{ $image }}
    </div>
    <div class="xmd:w-1/2 flex flex-col items-center md:items-start lg:flex-grow text-center md:text-left ">
        {{ $slot }}
    </div>
</div>