<div
    {{ $attributes->merge(["class" => "flex items-center text-white divide-x divide-wave-orange"]) }}
>
    @unless (request()->is("/"))
        <a
            href="/"
            class="px-4 text-lg font-bold transition-colors hover:text-wave-orange"
        >
            Home
        </a>
    @endunless

    <a
        href="/about"
        @class(["px-4 text-lg font-bold transition-colors hover:text-wave-orange", "text-wave-orange" => request()->is("about")])
    >
        About Us
    </a>
    <a
        href="/conference"
        @class(["px-4 text-lg font-bold transition-colors hover:text-wave-orange", "text-wave-orange" => request()->is("conference")])
    >
        What to expect?
    </a>
    <a
        href="/attend"
        @class(["px-4 text-lg font-bold transition-colors hover:text-wave-orange", "text-wave-orange" => request()->is("attend")])
    >
        Attend
    </a>
    <a
        href="/sponsor"
        @class(["px-4 text-lg font-bold transition-colors hover:text-wave-orange", "text-wave-orange" => request()->is("sponsor")])
    >
        Sponsor
    </a>
    <a
        href="https://nor.dev/posts"
        class="px-4 text-lg font-bold transition-colors hover:text-wave-orange"
    >
        News
    </a>
</div>
