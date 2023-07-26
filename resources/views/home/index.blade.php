@extends('master.layout')

@section('page_title')
    Admin Home
@endsection

@section('content')
    <h1 class="px-6 py-2 text-4xl font-bold text-green-600">Home</h1>

    @include('home.partials.cards')

    <div class="px-6 flex items-center gap-4">

    </div>
@endsection
