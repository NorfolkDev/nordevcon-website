<div
    class="m-auto grid max-w-7xl grid-cols-3 gap-4 px-4 py-12 sm:px-6 lg:px-0 lg:py-20"
>
    <div
        class="col-span-3 my-4 flex flex-col items-stretch overflow-hidden rounded-lg shadow-lg lg:col-span-2 lg:flex-row"
    >
        <div
            class="flex flex-1 flex-grow flex-col border-b-2 border-gray-700 lg:border-b-0 lg:border-r-2"
        >
            <x-tickets.item
                title="Thursday Ticket"
                price="£36"
                rrp="£120"
                description="Our development day, 3 tracks with a focus on the technical, new frameworks, new languages and new features"
                :features="['Frontend Development' , 'Backend Development' , 'System engineering & DevOps' ]"
                :href="config('variables.ticket_url')"
            />
        </div>

        <div
            class="flex flex-1 flex-grow flex-col border-t-2 border-gray-700 lg:border-l-2 lg:border-t-0"
        >
            <x-tickets.item
                title="Friday Ticket"
                price="£63"
                rrp="£210"
                description="Our mixed day, 3 tracks, one on development, another on business & wellbeing, and our community spotlight track"
                :features="['Software Development' , 'Career & Wellbeing', 'Business' ]"
                :href="config('variables.ticket_url')"
            />
        </div>
    </div>

    <div
        class="col-span-3 row-start-1 flex overflow-hidden rounded-lg shadow-lg lg:col-span-1 lg:row-start-auto"
    >
        <div class="flex flex-1 flex-col">
            <x-tickets.item
                title="Full Ticket"
                price="£130"
                rrp="£300"
                description="Access to both days, and the networking events surrounding the conference!"
                :features="['All the things' , '+ Networking events' , '+ Wine reception'   ]"
                :href="config('variables.ticket_url')"
            />
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
