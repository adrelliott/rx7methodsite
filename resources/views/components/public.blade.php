@props(['hideNav' => false, 'hideFooter' => false, 'pageHeader' => false])
<x-layout>
    
    <x-common.header />

    <main>
        {{ $slot }}
    </main>

    <x-common.footer />
    
</x-layout>
