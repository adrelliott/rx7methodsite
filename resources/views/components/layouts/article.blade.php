<x-layouts.public>
    <article class="prose mx-auto lg:prose-h1:text-6xl prose-h1:font-bold prose-h1:mb-2 mb-10 lg:mb-16 px-4">
        @isset($tags)
            {{-- TEMP TAGS --}}
            @php $tags=['Workplace Culture', 'Toxic Leaders'] @endphp
            
            <div class="flex flex-row gap-x-1 my-2">
                @foreach($tags as $tag)
                    <span class="bg-primary-light text-white text-xs py-[0.5px] px-1">{{ $tag }}</span>
                @endforeach
            </div>
        @endisset
        <h1>
            {{ $heading ?? 'Article Title' }}
        </h1>
        <div class="text-sm text-muted font-thin">
            Written by: <span class="font-normal">{{ $author ?? 'Al Elliott' }}</span>
            <span class="px-2 text-primary">|</span>
            Last Updated on: <span class="font-normal">{{ $publishedAt ?? '1st April 2023' }}</span>
        </div>
        <div>
            <img src="{{ $featuredImage ?? 'https://picsum.photos/1200/600' }}" alt="" class="mt-2 md:mt-4">
        </div>
        {{ $slot }}
    </article>
</x-layouts.public>
