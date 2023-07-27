@extends('master.layout')

@section('page_title')
    Admin Home
@endsection
@section('content')
    <div class="p-4">
        {{-- Users table --}}
        @include('users/partials/users_table')
    </div>
@endsection
