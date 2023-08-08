@props(['imageUrl' => '', 'imageAlt' => ''])
<div class="w-full md:w-5/6 lg:w-4/6 mx-auto">
    <div class="flex md:flex-row align-middle ">
        <div class="w-5/6 flex align-middle justify-center">
            <img src="/assets/img/{{ $imageUrl }}" alt="{{ $imageAlt }}">
        </div>
        <div class="align-middle">
            {{ $slot }}
        </div>
    </div>
</div>