<div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">

        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <x-dropdown>
                <x-slot name="trigger">
                    <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lh:inline-flex">
                        {{isset($currentCategory) ? ucwords($currentCategory) : 'categories'}} /* what are this double bracket*/
                        <x-icon
                            name="down-arrow" class="absolute pointer-events-none" style=""
                        />
                    </button>
                </x-slot>
            </x-dropdown>
        </div>
</div>
