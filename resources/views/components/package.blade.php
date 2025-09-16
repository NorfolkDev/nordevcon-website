@props([
    "title",
    "price" => "",
    "features" => [],
    "new" => false,
    "description" => "",
])

<div class="flex flex-1 flex-col">
    <div class="min-h-48 bg-white px-6 pb-4 pt-10">
        <div>
            <h3 class="text-center text-2xl font-medium text-slate-900">
                {{ $title }}

                @if ($new)
                    <x-forms.badge>New</x-forms.badge>
                @endif
            </h3>
            <div class="mt-4 flex items-center justify-center">
                @if ($price)
                    <span
                        class="flex items-start px-3 text-6xl tracking-tight text-slate-900"
                    >
                        <span
                            class="mr-2 mt-2 text-4xl font-medium tracking-tight"
                        >
                            £
                        </span>
                        <span class="font-bold">{{ $price }}</span>
                    </span>
                    <span class="text-xl font-medium text-slate-500">.00</span>
                @else
                    <p class="text-4xl font-medium text-slate-500">
                        Contact us...
                    </p>
                @endif
            </div>
            @if ($description)
                <div class="mt-8 text-sm">
                    <p>
                        {{ $description }}
                    </p>
                </div>
            @endif
        </div>
    </div>

    <div
        class="flex flex-1 flex-col justify-between border-t-2 border-slate-300 bg-slate-50 p-6"
    >
        <ul role="list" class="space-y-2">
            @foreach ($features as $feature)
                <li class="flex items-start">
                    <div class="flex-shrink-0">
                        <img
                            class="mt-1 h-4"
                            src="{{ Vite::asset("resources/img/poster-crab.png") }}"
                        />
                    </div>
                    <p class="ml-3 text-base text-slate-700">
                        {{ $feature }}
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
</div>
