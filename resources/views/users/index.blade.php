@extends('master.layout')

@section('page_title')
    Admin Home
@endsection
@section('content')
    <div class="px-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4">Users</h1>

            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="bg-gray-100">
                            <td class="border px-2 py-2">{{ $user->id }}</td>
                            <td class="border px-2 py-2">{{ $user->first_name }} {{ $user->last_name }}</td>
                            <td class="border px-2 py-2">{{ $user->email }}</td>
                            <td class="flex border px-2 py-2 gap-2">
                                <a href="{{ url('/users/' . $user->id . '/edit') }}"
                                    class="px-2 py-1 text-sm text-indigo-600 bg-blue-500 rounded-full">Show</a>

                                <a href="{{ url('/users/' . $user->id . '/edit') }}"
                                    class="px-2 py-1 text-sm text-indigo-600 bg-indigo-200 rounded-full">Edit</a>

                                <form action="{{ url('/users/' . $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-2 py-1 text-sm text-red-400 bg-red-200 rounded-full"
                                        onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
