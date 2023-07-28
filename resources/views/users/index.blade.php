@extends('master.layout')

@section('page_title')
    Admin Home
@endsection

@section('content')
    <div class="p-4">
        {{-- Users table --}}
        <section class="container px-4 mx-auto">
            {{-- Title --}}
            <div class="sm:flex sm:items-center sm:justify-between">
                <div>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-medium text-gray-800 ">Users</h2>
                    </div>
                </div>
                <a class="px-6 py-2 text-xl bg-green-300 rounded-md text-white font-semibold hover:bg-green-600"
                    href="{{ url('/users/create') }}">Add New User</a>
            </div>
            {{-- Filter/Search --}}
            @include('users/partials/filter_search')
            {{-- Table --}}
            @include('users/partials/users_table')
            {{-- Paginate --}}
            @include('users/partials/page_links')
        </section>
    </div>
@endsection
