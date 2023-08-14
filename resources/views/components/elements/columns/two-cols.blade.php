@props([
    'colSplit' => '1/2:1/2',
    'flexBasis' => [
        '1/4:3/4' => ['basis-1/4', 'basis-3/4'],
        '1/3:2/3' => ['basis-1/3', 'basis-2/3'],
        '1/2:1/2' => ['basis-1/2', 'basis-1/2'],
        '2/3:1/3' => ['basis-2/3', 'basis-1/3'],
        '3/4:1/4' => ['basis-3/4', 'basis-1/4'],
    ]
])
<div {{ $attributes->merge(['class' => 'flex flex-col md:flex-row ']) }}>
    
    <div class="{{ $flexBasis[$colSplit][0] }} md:pr-6 lg:pr-10 xl:pr-12">
        {{ $column1 }}
    </div>
    <div class="{{ $flexBasis[$colSplit][1] }} pt-4 md:pt-0 md:pl-6 lg:pl-10 xl:pl-12">
        {{ $column2 }}
    </div>

</div>