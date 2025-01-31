<dialog 
    x-ref="offer"
    x-data="{ disable: Alpine.$persist(false) }"
    x-init="$nextTick(() => { console.log(disable); if (!disable) $el.showModal() })"
    class="w-full bg-transparent p-0 backdrop:bg-black backdrop:bg-opacity-50"
>
    <form class="mx-auto max-w-2xl overflow-hidden rounded-md bg-wave-pink text-white shadow-md" method="dialog">
        <header class="flex justify-end p-4">
            <div class="flex-1">
                <h2 class="text-lg font-bold lg:text-2xl">
                    Missed our Early Bird offers?..
                </h2>
            </div>
            <div>
                <button type="submit" aria-label="close" formmethod="dialog" formnovalidate class="font-bold">
                    X
                </button>
            </div>
        </header>

        <div class="p-4 space-y-2 bg-slate-100 text-slate-900">
            <h4 class="text-2xl font-bold">
                OFFER ENDS TODAY!
            </h4>

            <h4 class="text-2xl font-bold">
                Don't miss out on this opportunity to get 40% off TODAY!
            </h4>

            <p>
                Join hundreds of developers elevate their skills with workshops, keynote sessions, and
                networking events. Whether you're a seasoned professional or just starting out, there's 
                something for everyone!
            </p>

            <p class="pt-2 font-bold">
                Why Attend NordevCon?
            </p>

            <ul class="ml-4 list-disc">
                <li>Expert Speakers: Learn from industry leaders and innovators.</li>
                <li>Hands-On Workshops: Gain practical experience with the latest technologies.</li>
                <li>Networking Opportunities: Connect with peers, mentors, and potential employers.</li>
                <li>Access to Exclusive Resources: Receive materials and recordings post-conference.</li>
            </ul>

            <p class="text-xl font-extrabold">
                Use Promo Code:
                <a
                    href="https://ti.to/norfolkdevelopers/nordevcon-25/discount/oh-go-on-then"
                    class="underline decoration-wave-orange"
                >
                    oh-go-on-then
                </a>
                at checkout to receive 40% off your ticket!
            </p>
        </div>

        <footer class="p-4 grid grid-cols-2 gap-4">
            <div>
                <a
                    href="https://ti.to/norfolkdevelopers/nordevcon-25/discount/oh-go-on-then"
                    target="_blank"
                    class="w-full inline-block rounded bg-green-400 px-4 py-2 font-black text-slate-900 ring-2 ring-green-400/50 transition-all hover:ring-4 hover:ring-green-400-75"
                    @click="
                        disable = true;
                        $refs.offer.close();
                    "
                >
                    Oh, go on then!
                </a>
            </div>

            <div>
                <button
                    @click="
                        disable = true;
                        $refs.offer.close();
                    "
                    type="button"
                    class="w-full inline-block rounded bg-wave-orange px-4 py-2 font-black text-slate-900 ring-2 ring-wave-orange/50 transition-all hover:ring-4 hover:ring-wave-orange-75"
                >
                    Don't bother me with your offers!
                </button>
            </div>
        </footer>
    </form>
</dialog>
