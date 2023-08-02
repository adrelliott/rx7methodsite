@props(['hideNav' => false, 'hideFooter' => false, 'pageHeader' => false, 'notProse' => false])
<x-layout>
    
    <x-common.header />

    <main class="">
        {{ $slot }}
    </main>

    <x-common.footer />
    
</x-layout>
