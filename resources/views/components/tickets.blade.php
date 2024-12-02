<div class="flex flex-col bg-gray-900">
    <div class="px-4 pt-12 sm:px-6 lg:px-8 lg:pt-20">
        <div class="text-center">
            <h2
                class="text-lg font-semibold uppercase leading-6 tracking-wider text-gray-300"
            >
                {{ config("variables.date") }}
            </h2>

            <div class="mx-auto max-w-4xl">
                <p
                    class="mt-4 text-3xl font-bold text-white sm:text-4xl lg:text-5xl"
                >
                    Crab 🦀 your ticket now!
                </p>

                <p
                    class="mt-4 text-white"
                >

                    Discounted tickets are only available to personal purchases or companies with 10 or less employees. For larger organisations of more than 10 employees we ask you purchase a "Commercial Ticket". Please get in contact with our team if you've feedback on this new model.
                </p>
            </div>
        </div>
    </div>

    <div
        class="m-auto grid max-w-7xl grid-cols-3 gap-4 px-4 py-12 sm:px-6 lg:px-0 lg:py-20"
    >
        <div
            class="col-span-3 flex flex-col items-stretch overflow-hidden rounded-lg shadow-lg lg:col-span-2 lg:flex-row"
        >
            <div
                class="flex flex-1 flex-grow flex-col border-b-2 border-gray-700 lg:border-b-0 lg:border-r-2"
            >
                <x-tickets.item
                    title="Thursday Ticket"
                    price="£72"
                    rrp="£120"
                    description="Our development day, 3 tracks with a focus on the technical, new frameworks, new languages and new features"
                    :features="['Frontend Development' , 'Backend Development' , 'System engineering & DevOps' ]"
                    href="https://ti.to/norfolkdevelopers/nordevcon-25/"
                />
            </div>

            <div
                class="flex flex-1 flex-grow flex-col border-t-2 border-gray-700 lg:border-l-2 lg:border-t-0"
            >
                <x-tickets.item
                    title="Friday Ticket"
                    price="£126"
                    rrp="£210"
                    description="Our mixed day, 3 tracks, one on development, another on business & wellbeing, and our community spotlight track"
                    :features="['Software Development' , 'Career & Wellbeing', 'Business' ]"
                    href="https://ti.to/norfolkdevelopers/nordevcon-25/"
                />
            </div>
        </div>

        <div
            class="col-span-3 flex overflow-hidden rounded-lg shadow-lg lg:col-span-1"
        >
            <div class="flex flex-1 flex-col">
                <x-tickets.item
                    title="Full Ticket"
                    price="£180"
                    rrp="£300"
                    description="Access to both days, and the networking events surrounding the conference!"
                    :features="['All the things' , '+ Networking events' , '+ Wine reception'   ]"
                    href="https://ti.to/norfolkdevelopers/nordevcon-25/"
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
</div>
