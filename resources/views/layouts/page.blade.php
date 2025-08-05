@extends("layouts.default")

@section("content")
    <div>
        <div class="flex justify-start md:justify-end py-2 md:py-4 bg-slate-900">
            <x-navigation />
        </div>

        <div class="relative">
            <x-wave />
        </div>

        @yield("page")
    </div>
@endsection
