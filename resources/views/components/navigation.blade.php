<div
    {{ $attributes->merge(["class" => "flex flex-col md:flex-row text-white divide-y divide-wave-orange md:divide-y-0 md:divide-x md:divide-wave-orange"]) }}
>
    @unless (request()->is("/"))
        <a
            href="/"
            class="w-full px-4 py-1 md:py-0 text-sm md:text-lg font-bold transition-colors hover:text-wave-orange text-left md:text-center"
        >
            Home
        </a>
    @endunless

    <a
        href="/about"
        @class(["w-full px-4 py-1 md:py-0 text-sm md:text-lg font-bold transition-colors hover:text-wave-orange text-left md:text-center", "text-wave-orange" => request()->is("about")])
    >
        About Us
    </a>
    <a
        href="/conference"
        @class(["w-full px-4 py-1 md:py-0 text-sm md:text-lg font-bold transition-colors hover:text-wave-orange text-left md:text-center", "text-wave-orange" => request()->is("conference")])
    >
        What to expect?
    </a>
    <a
        href="/attend"
        @class(["w-full px-4 py-1 md:py-0 text-sm md:text-lg font-bold transition-colors hover:text-wave-orange text-left md:text-center", "text-wave-orange" => request()->is("attend")])
    >
        Attend
    </a>
    <a
        href="/sponsor"
        @class(["w-full px-4 py-1 md:py-0 text-sm md:text-lg font-bold transition-colors hover:text-wave-orange text-left md:text-center", "text-wave-orange" => request()->is("sponsor")])
    >
        Sponsor
    </a>
    <a
        href="https://nor.dev/posts"
        class="w-full px-4 py-1 md:py-0 text-sm md:text-lg font-bold transition-colors hover:text-wave-orange text-left md:text-center"
    >
        News
    </a>
</div>
