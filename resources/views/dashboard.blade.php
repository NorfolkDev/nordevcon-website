@extends("layouts.page")

@section('title', "Dashboard")

@section("page")
    <section class="mx-auto max-w-7xl p-4">
        <h1 class="text-4xl font-semibold text-wave-purple">
            Welcome, {{ Auth::user()->name }}
        </h1>
    </section>
@endsection
