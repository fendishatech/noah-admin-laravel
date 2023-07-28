@extends('master.layout')

@section('page_title')
    Admin Home
@endsection
@section('content')
    <div class="p-4">
        {{-- Users table --}}
        <section class="container px-4 mx-auto">
            @include('users/partials/users_table')
        </section>
    </div>
@endsection
