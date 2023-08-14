@props(['subhead' => 'Set a slot named subhead', 'heading' => 'Set a slot name heading'])
<div class="mb-8 md:mx-auto md:mb-12 text-center max-w-3xl">

    <p class="subhead">
        {{ $subhead }}
    </p>

    <h2 class="text-center mb-6 mt-0">
        {{ $heading }}
    </h2>

    <p class="lead text-center">
        {{ $slot }}
    </p>

</div>