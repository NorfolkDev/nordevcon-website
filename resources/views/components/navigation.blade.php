<div
    {{ $attributes->merge(["class" => "flex flex-col md:flex-row text-white divide-y divide-wave-orange md:divide-y-0 md:divide-x md:divide-wave-orange"]) }}
>
    @unless (request()->is("/"))
        <a
            href="/"
            class="whitespace-nowrap px-4 py-1 text-left text-sm font-bold transition-colors hover:text-wave-orange md:py-0 md:text-center md:text-lg"
        >
            Home
        </a>
    @endunless

    <a
        href="/about"
        @class(["whitespace-nowrap px-4 py-1 text-left text-sm font-bold transition-colors hover:text-wave-orange md:py-0 md:text-center md:text-lg", "text-wave-orange" => request()->is("about")])
    >
        About Us
    </a>
    <a
        href="/conference"
        @class(["whitespace-nowrap px-4 py-1 text-left text-sm font-bold transition-colors hover:text-wave-orange md:py-0 md:text-center md:text-lg", "text-wave-orange" => request()->is("conference")])
    >
        What to expect?
    </a>
    <a
        href="/attend"
        @class(["whitespace-nowrap px-4 py-1 text-left text-sm font-bold transition-colors hover:text-wave-orange md:py-0 md:text-center md:text-lg", "text-wave-orange" => request()->is("attend")])
    >
        Attend
    </a>
    <a
        href="/speak"
        @class(["whitespace-nowrap px-4 py-1 text-left text-sm font-bold transition-colors hover:text-wave-orange md:py-0 md:text-center md:text-lg", "text-wave-orange" => request()->is("speak")])
    >
        Speak
    </a>
    <a
        href="/sponsor"
        @class(["whitespace-nowrap px-4 py-1 text-left text-sm font-bold transition-colors hover:text-wave-orange md:py-0 md:text-center md:text-lg", "text-wave-orange" => request()->is("sponsor")])
    >
        Sponsor
    </a>
    @guest
    <a
        href="/login"
        @class(["whitespace-nowrap px-4 py-1 text-left text-sm font-bold transition-colors hover:text-wave-orange md:py-0 md:text-center md:text-lg", "text-wave-orange" => request()->is("login")])
    >
        Login
    </a>
    @else
    <a
        href="/dashboard"
        @class(["whitespace-nowrap px-4 py-1 text-left text-sm font-bold transition-colors hover:text-wave-orange md:py-0 md:text-center md:text-lg", "text-wave-orange" => request()->is("dashboard")])
    >
        Dashboard
    </a>
    @endguest
</div>
