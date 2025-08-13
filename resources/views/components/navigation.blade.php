<div
    {{ $attributes->merge(["class" => "flex flex-col md:flex-row text-white divide-y divide-wave-orange md:divide-y-0 md:divide-x md:divide-wave-orange"]) }}
>
    @unless (request()->is("/"))
        <a
            href="/"
            class="px-4 py-1 md:py-0 text-sm md:text-lg font-bold transition-colors hover:text-wave-orange text-left md:text-center whitespace-nowrap"
        >
            Home
        </a>
    @endunless

    <a
        href="/about"
        @class(["px-4 py-1 md:py-0 text-sm md:text-lg font-bold transition-colors hover:text-wave-orange text-left md:text-center whitespace-nowrap", "text-wave-orange" => request()->is("about")])
    >
        About Us
    </a>
    <a
        href="/conference"
        @class(["px-4 py-1 md:py-0 text-sm md:text-lg font-bold transition-colors hover:text-wave-orange text-left md:text-center whitespace-nowrap", "text-wave-orange" => request()->is("conference")])
    >
        What to expect?
    </a>
    <a
        href="/attend"
        @class(["px-4 py-1 md:py-0 text-sm md:text-lg font-bold transition-colors hover:text-wave-orange text-left md:text-center whitespace-nowrap", "text-wave-orange" => request()->is("attend")])
    >
        Attend
    </a>
    <a
        href="/speak"
        @class(["px-4 py-1 md:py-0 text-sm md:text-lg font-bold transition-colors hover:text-wave-orange text-left md:text-center whitespace-nowrap", "text-wave-orange" => request()->is("speak")])
    >
        Speak
    </a>
    <a
        href="/sponsor"
        @class(["px-4 py-1 md:py-0 text-sm md:text-lg font-bold transition-colors hover:text-wave-orange text-left md:text-center whitespace-nowrap", "text-wave-orange" => request()->is("sponsor")])
    >
        Sponsor
    </a>
    <a
        href="https://nor.dev/posts"
        class="px-4 py-1 md:py-0 text-sm md:text-lg font-bold transition-colors hover:text-wave-orange text-left md:text-center whitespace-nowrap"
    >
        News
    </a>
</div>
