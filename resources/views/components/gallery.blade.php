<div class="my-12 lg:my-20">
    <ul class="px-2 grid gap-2 grid-rows-[1fr] grid-cols-2 lg:px-5 lg:grid-cols-6 lg:gap-5">
        <li class="hidden lg:block lg:row-span-2">
            <img class="w-full h-full object-cover rounded-lg"
                src="{{ Vite::asset('resources/img/gallery-splash-1.jpg') }}">
        </li>
        <li class="hidden lg:block ">
            <img class="w-full h-full object-cover rounded-lg"
                src="{{ Vite::asset('resources/img/gallery-splash-2.jpg') }}">
        </li>
        <li class="lg:row-span-2 lg:col-span-2">
            <img class="w-full h-full object-cover rounded-lg"
                src="{{ Vite::asset('resources/img/gallery-splash-3.jpg') }}">
        </li>
        <li class="">
            <img class="w-full h-full object-cover rounded-lg"
                src="{{ Vite::asset('resources/img/gallery-splash-4.jpg') }}">
        </li>
        <li class="bg-wave-orange rounded-lg p-4 flex flex-col gap-4 justify-center text-center">
            <p class="font-extrabold text-xl">
                Join a community that thrives throughout the year!
            </p>

            <p>
                <a class="block px-4 py-2 bg-wave-purple text-white font-bold rounded"
                    href="{{ config('variables.gallery_url') }}">
                    Checkout 2024's Photo Reel
                </a>
            </p>
        </li>
        <li class="">
            <img class="w-full h-full object-cover rounded-lg"
                src="{{ Vite::asset('resources/img/gallery-splash-5.jpg') }}">
        </li>
        <li class="hidden lg:block lg:col-span-2">
            <img class="w-full h-full object-cover rounded-lg"
                src="{{ Vite::asset('resources/img/gallery-splash-6.jpg') }}">
        </li>
    </ul>
</div>
