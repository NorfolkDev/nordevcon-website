<div
    class="m-auto grid max-w-7xl grid-cols-3 gap-4 px-4 py-12 sm:px-6 lg:px-0 lg:py-20"
>
    <div
        class="col-span-3 my-4 flex flex-col items-stretch overflow-hidden rounded-lg shadow-lg lg:col-span-2 lg:flex-row"
    >
        <div
            class="flex flex-1 flex-grow flex-col border-b-2 border-gray-700 lg:border-b-0 lg:border-r-2"
        >
            @if(isset($tickets['thursday']))
                <x-tickets.item
                    :title="$tickets['thursday']['name']"
                    :price="$tickets['thursday']['price']"
                    :rrp="$tickets['thursday']['rrp']"
                    :description="$tickets['thursday']['description']"
                    :features="$tickets['thursday']['features']"
                    :href="config('variables.ticket_url')"
                />
            @endif
        </div>

        <div
            class="flex flex-1 flex-grow flex-col border-t-2 border-gray-700 lg:border-l-2 lg:border-t-0"
        >
            @if(isset($tickets['friday']))
                <x-tickets.item
                    :title="$tickets['friday']['name']"
                    :price="$tickets['friday']['price']"
                    :rrp="$tickets['friday']['rrp']"
                    :description="$tickets['friday']['description']"
                    :features="$tickets['friday']['features']"
                    :href="config('variables.ticket_url')"
                />
            @endif
        </div>
    </div>

    <div
        class="col-span-3 row-start-1 flex overflow-hidden rounded-lg shadow-lg lg:col-span-1 lg:row-start-auto"
    >
        <div class="flex flex-1 flex-col">
            @if(isset($tickets['full']))
                <x-tickets.item
                    :title="$tickets['full']['name']"
                    :price="$tickets['full']['price']"
                    :rrp="$tickets['full']['rrp']"
                    :description="$tickets['full']['description']"
                    :features="$tickets['full']['features']"
                    :href="config('variables.ticket_url')"
                />
            @endif
        </div>
    </div>

    <div class="col-span-3">
        <a
            href="{{ config("variables.ticket_url") }}"
            class="mt-4 flex items-center justify-center rounded-md border border-transparent bg-wave-pink px-5 py-3 text-lg font-extrabold text-white lg:text-2xl"
        >
            See all Tickets
        </a>
    </div>
</div>
