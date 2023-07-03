@extends('master.layout')

@section('page_title')
    Admin Home
@endsection

@section('content')
    <h1 class="text-center px-6 py-2 text-4xl font-bold text-green-600">Admin Panel</h1>
    <form action="{{ url('/logout') }}" method="post">
        @csrf
        <input class="bg-green-600 px-6 py-2 rounded text-white font-semibold" type="submit" value="Logout">
    </form>
@endsection
