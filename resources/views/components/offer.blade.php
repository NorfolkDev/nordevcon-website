<dialog
    x-ref="offer"
    x-data="{ disable: Alpine.$persist(false).as(@js('offer-dismissed-' . $offer['code'])) }"
    x-init="$nextTick(() => { if (!disable) $el.showModal() })"
    class="w-full bg-transparent p-0 backdrop:bg-black backdrop:bg-opacity-50"
>
    <form class="mx-auto max-w-2xl overflow-hidden rounded-md bg-wave-pink text-white shadow-md" method="dialog">
        <header class="flex justify-end p-4">
            <div class="flex-1">
                <h2 class="text-lg font-bold lg:text-2xl">
                    {{ $offer['headline'] }}
                </h2>
            </div>
            <div>
                <button type="submit" aria-label="close" formmethod="dialog" formnovalidate class="font-bold">
                    X
                </button>
            </div>
        </header>

        <div class="p-4 space-y-2 bg-slate-100 text-slate-900">
            @if ($endsToday && $offer['last_day_title'])
                <h4 class="text-2xl font-bold">
                    {{ $offer['last_day_title'] }}
                </h4>
            @endif

            <h4 class="text-2xl font-bold">
                {{ $offer['title'] }}
            </h4>

            <p>
                {{ $offer['message'] }}
            </p>

            @if ($offer['reasons'])
                <p class="pt-2 font-bold">
                    {{ $offer['reasons_title'] }}
                </p>

                <ul class="ml-4 list-disc">
                    @foreach ($offer['reasons'] as $reason)
                        <li>{{ $reason }}</li>
                    @endforeach
                </ul>
            @endif

            <p class="text-xl font-extrabold">
                {{ $offer['code_prefix'] }}
                <a
                    href="{{ $offer['url'] }}"
                    class="underline decoration-wave-orange"
                >
                    {{ $offer['code'] }}
                </a>
                {{ $offer['code_suffix'] }}
            </p>
        </div>

        <footer class="p-4 grid grid-cols-2 gap-4">
            <div>
                <a
                    href="{{ $offer['url'] }}"
                    target="_blank"
                    class="w-full inline-block rounded bg-green-400 px-4 py-2 font-black text-slate-900 ring-2 ring-green-400/50 transition-all hover:ring-4 hover:ring-green-400-75"
                    @click="
                        disable = true;
                        $refs.offer.close();
                    "
                >
                    {{ $offer['accept_label'] }}
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
                    {{ $offer['dismiss_label'] }}
                </button>
            </div>
        </footer>
    </form>
</dialog>
