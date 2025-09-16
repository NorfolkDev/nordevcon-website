@extends("layouts.page")

@section('title', "Login")

@section("page")
    <div class="mx-auto max-w-7xl px-4">
        <div class="grid gap-4 lg:grid-cols-12">
            <div class="lg:col-span-4">
                <h2
                    class="mt-2 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl"
                >
                    Login
                </h2>
                <p
                    class="mx-auto mt-3 max-w-4xl text-xl text-slate-700 sm:mt-5 sm:text-2xl"
                >
                    Use your ticket to login to the conference site, once logged
                    in you can save your across all your devices, receive
                    personalised notifications, and provide feedback on
                    sessions.
                </p>
            </div>

            <div
                class="overflow-hidden rounded-lg bg-slate-900 p-4 lg:col-span-8 lg:p-8"
            >
                <form
                    method="POST"
                    class="grid gap-4 lg:grid-cols-12 lg:gap-8"
                    js-qr
                >
                    @csrf

                    @if (session("success"))
                        <div
                            class="col-span-12 rounded border-green-800 bg-green-300 px-4 py-2 text-green-800"
                        >
                            <p>{{ session("success") }}</p>
                        </div>
                    @endif

                    @if ($errors->any())
                        <ul
                            class="col-span-12 ml-4 list-disc rounded bg-white p-4 text-wave-pink"
                        >
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="col-span-9">
                        <x-forms.input
                            type="email"
                            name="email"
                            label="Your Email Address"
                            placeholder="conference@norfolkdevelopers.com"
                        />
                    </div>
                    <div class="col-span-3">
                        <x-forms.input
                            type="reference"
                            name="reference"
                            label="Ticket Reference"
                            placeholder="e.g. ABC-1"
                        />
                    </div>

                    <div class="col-span-12">
                        <input type="hidden" name="slug" js-qr-input />

                        <div class="group mb-4 hidden" js-qr-webcam>
                            <div class="relative inline-block">
                                <video
                                    class="rounded-lg"
                                    autoplay
                                    playsinline
                                ></video>

                                <div
                                    class="absolute inset-0 flex h-full w-full justify-center"
                                >
                                    <svg
                                        viewBox="0 0 100 100"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g
                                            fill="none"
                                            stroke="white"
                                            stroke-width="5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        >
                                            <path
                                                class="duration-400 transition group-[.success]:text-green-500 group-[.js-qr-success]:opacity-0"
                                                d="M20 10 L10 10 L10 20 M80 10 L90 10 L90 20 M80 90 L90 90 L90 80 M20 90 L10 90 L10 80"
                                            />

                                            <path
                                                class="text-green-500 opacity-0 transition duration-200 group-[.js-qr-success]:opacity-100"
                                                stroke="currentColor"
                                                d="M25 50 L45 70 L75 30"
                                            />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-2">
                            <button
                                type="submit"
                                class="flex rounded-md border border-transparent bg-wave-purple px-5 py-3 text-base font-bold text-white shadow focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-slate-600 sm:px-10"
                            >
                                Login with email

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    aria-hidden="true"
                                    class="ml-4 h-6 w-6"
                                >
                                    <path
                                        d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z"
                                    ></path>
                                </svg>
                            </button>

                            <button
                                type="button"
                                class="flex rounded-md border border-transparent bg-wave-orange px-5 py-3 text-base font-bold text-white shadow focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-slate-600 sm:px-10"
                                js-qr-button
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                    class="mr-4 h-6 w-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 3.75 9.375v-4.5ZM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 0 1-1.125-1.125v-4.5ZM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 13.5 9.375v-4.5Z"
                                    />
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M6.75 6.75h.75v.75h-.75v-.75ZM6.75 16.5h.75v.75h-.75v-.75ZM16.5 6.75h.75v.75h-.75v-.75ZM13.5 13.5h.75v.75h-.75v-.75ZM13.5 19.5h.75v.75h-.75v-.75ZM19.5 13.5h.75v.75h-.75v-.75ZM19.5 19.5h.75v.75h-.75v-.75ZM16.5 16.5h.75v.75h-.75v-.75Z"
                                    />
                                </svg>
                                Scan your Ticket
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
