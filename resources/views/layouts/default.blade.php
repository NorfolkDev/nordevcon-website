<html>
    <head>
        <meta charset="utf-8" />
        <title>@yield("title") | {{ config("variables.title") }}</title>
        <meta
            property="og:title"
            content="@yield(" title") | {{ config("variables.title") }}"
        />
        <meta
            name="twitter:title"
            content="@yield(" title") | {{ config("variables.title") }}"
        />

        <meta
            name="description"
            content="@yield('description', config('variables.description'))"
        />
        <meta
            property="og:description"
            content="@yield('description', config('variables.description'))"
        />
        <meta
            name="twitter:description"
            content="@yield('description', config('variables.description'))"
        />
        <meta
            name="og:image"
            content="{{ Vite::asset("resources/img/website-hero.jpg") }}"
        />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta
            name="theme-color"
            content="{{ config("variables.brand_color") }}"
        />
        <meta property="og:type" content="website" />
        <meta name="twitter:card" content="summary_large_image" />

        @stack("meta")

        @googlefonts(["nonce" => csp_nonce()])
        @vite("resources/css/app.css")
    </head>

    <body class="min-h-[100dvh] bg-gray-100">
        <div
            class="fixed left-0 right-0 top-0 z-[9999] bg-white/80 p-4 font-bold"
        >
            <p>
                This is an archive of a previous conference - thanks for
                checking it out! You can see our current conference at
                <a class="underline" href="https://nordevcon.com">
                    nordevcon.com
                </a>
            </p>
        </div>
        <main>
            @yield("content")
        </main>

        @vite("resources/js/app.js")
    </body>
</html>
