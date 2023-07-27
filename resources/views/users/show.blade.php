@extends('master.layout')

@section('page_title')
    User Detail
@endsection

@section('content')
    <div class="p-4">
        <h1>User Detail</h1>
        <p>Name : {{ $user->first_name }} {{ $user->last_name }}</p>
    </div>
@endsection
