<div class="flex">
    <div class="flex-shrink-0">
        <div class="flex justify-center items-center ">
            <x-icon path="check-circle" class="h-5 w-5 font-bold text-white" />
                {{-- <svg class="h-5 w-5 bg-primary rounded-full text-gray-50"
                    data-icon="tabler:check" height="1em" viewBox="0 0 24 24" width="1em">
                    <symbol id="ai:tabler:check">
                        <path d="m5 12l5 5L20 7" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"></path>
                    </symbol>
                </svg> --}}
        </div>
    </div>
    <div class="ml-4">
        <h3 class="font-medium dark:text-white leading-6 text-lg">
            {{ $slot }}
        </h3>
    </div>
</div>
