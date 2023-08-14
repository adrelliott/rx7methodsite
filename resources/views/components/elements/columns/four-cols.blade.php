<div {{ $attributes->merge(['class' => 'flex flex-col lg:flex-row gap-6']) }}>
    <div class="lg:basis-1/4">
        {{ $column1 ?? 'Defne a slot named column1' }}
    </div>
    <div class="lg:basis-1/4">
        {{ $column2 ?? 'Defne a slot named column2' }}
    </div>
    <div class="lg:basis-1/4">
        {{ $column3 ?? 'Defne a slot named column3' }}
    </div>
    <div class="lg:basis-1/4">
        {{ $column4 ?? 'Defne a slot named column4' }}
    </div>
</div>