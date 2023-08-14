<x-layouts.section-full-width class="bg-slate-100">
    <x-layouts.intro>
        <x-slot name="subhead">
            Inside Template
        </x-slot>
        <x-slot name="heading">
            And what's inside..?
        </x-slot>
        Ne dicta praesent ocurreret has, diam theophrastus at pro. Eos etiam regione ut, persius eripuit quo id. Sit te euismod tacimates.
    </x-layouts.intro>
    
    <div class="lg:max-w-4xl lg:mx-auto grid grid-rows-2 md:grid-cols-2 gap-4">
        <div class="border rounded-md border-slate-200 bg-white px-4 py-2">
            <h3 class="text-center mb-4">
                The Old Way
            </h3>
            <x-elements.checklist class="space-y-4">
                <x-elements.checklist.item bgColor="bg-red-500" icon="cross" class="mb-2">
                    <x-slot name="heading">
                        Per ei quaeque sensibus
                    </x-slot>
                    Ex usu illum iudico molestie. Pro ne agam facete mediocritatem, ridens labore facete mea ei. Pro id apeirian dignissim.
                </x-elements.checklist.item>
                
                <x-elements.checklist.item bgColor="bg-red-500" icon="cross" class="mb-2">
                    <x-slot name="heading">
                        Per ei quaeque sensibus
                    </x-slot>
                    Ex usu illum iudico molestie. Pro ne agam facete mediocritatem, ridens labore facete mea ei. Pro id apeirian dignissim.
                </x-elements.checklist.item>
                
                <x-elements.checklist.item bgColor="bg-red-500" icon="cross" class="mb-2">
                    <x-slot name="heading">
                        Per ei quaeque sensibus
                    </x-slot>
                    Ex usu illum iudico molestie. Pro ne agam facete mediocritatem, ridens labore facete mea ei. Pro id apeirian dignissim.
                </x-elements.checklist.item>
                
            </x-elements.checklist>
        </div>
        <div class="border rounded-md border-slate-200 bg-white px-4 py-2">
            <h3 class="text-center mb-4">
                The New Way
            </h3>
            <x-elements.checklist class="space-y-4">
                <x-elements.checklist.item bgColor="bg-green-500" icon="checkmark" class="mb-2">
                    <x-slot name="heading">
                        Per ei quaeque sensibus
                    </x-slot>
                    Ex usu illum iudico molestie. Pro ne agam facete mediocritatem, ridens labore facete mea ei. Pro id apeirian dignissim.
                </x-elements.checklist.item>
                
                <x-elements.checklist.item bgColor="bg-green-500" icon="checkmark" class="mb-2">
                    <x-slot name="heading">
                        Per ei quaeque sensibus
                    </x-slot>
                    Ex usu illum iudico molestie. Pro ne agam facete mediocritatem, ridens labore facete mea ei. Pro id apeirian dignissim.
                </x-elements.checklist.item>
                
                <x-elements.checklist.item bgColor="bg-green-500" icon="checkmark" class="mb-2">
                    <x-slot name="heading">
                        Per ei quaeque sensibus
                    </x-slot>
                    Ex usu illum iudico molestie. Pro ne agam facete medi ocr itatem, ridens labore facete mea ei. Pro id apeirian dignissim.
                </x-elements.checklist.item>
                
            </x-elements.checklist>
        </div>
    </div>
</x-layouts.section-full-width>