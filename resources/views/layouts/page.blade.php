@extends("layouts.default")

@section("content")
    <div>
        <div class="flex justify-end py-4 bg-slate-900">
            <x-navigation />
        </div>

        <div class="relative">
            <x-wave />
        </div>

        @yield("page")
    </div>
@endsection
