@extends('master.layout')

@section('page_title')
    Add User
@endsection

@section('content')
    <div class="p-4">
        <div class="w-full flex items-center justify-center bg-slate-100">
            <form class="w-full  my-8 rounded-lg bg-white" action="{{ url('/users') }}" method="POST">
                @csrf
                <h2 class="mt-6 text-2xl text-center text-gray-400 mb-8">
                    Add New User
                </h2>

                <div class="px-5 pb-10">
                    @include('users.partials.user_form')

                    <button type="submit" class="w-full py-2 mt-8 rounded-sm bg-yellow-600 text-gray-100 focus:outline-none">
                        Add User
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
