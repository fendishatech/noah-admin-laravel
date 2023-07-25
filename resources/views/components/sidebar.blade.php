@php
    $menuItems = [['url' => '/home', 'label' => 'Home', 'icon' => 'fa-home'], ['url' => '/users', 'label' => 'Users', 'icon' => 'fa-user-circle'], ['url' => '/clients', 'label' => 'Clients', 'icon' => 'fa-users'], ['url' => '/cities', 'label' => 'Cities', 'icon' => 'fa-id-badge'], ['url' => '/sub_cities', 'label' => 'SubCities', 'icon' => 'fa-id-badge']];
    $memberMenuItems = [['url' => '/members', 'label' => 'List', 'icon' => 'fa-list'], ['url' => '/member_ids', 'label' => 'Ids', 'icon' => 'fa-id-card'], ['url' => '/member_lots', 'label' => 'Lots', 'icon' => 'fa-briefcase'], ['url' => '/member_jobs', 'label' => 'Jobs', 'icon' => 'fa-briefcase'], ['url' => '/member_addresses', 'label' => 'Addresses', 'icon' => 'fa-id-badge'], ['url' => '/member_ec', 'label' => 'Em Contacts', 'icon' => 'fa-id-badge'], ['url' => '/member_edus', 'label' => 'Educations', 'icon' => 'fa-id-badge']];
@endphp


<div class="py-4">
    <h2 class="text-white px-6 py-5 bg-green-600 font-bold mb-4">{{ $title }}</h2>
    <ul>
        @foreach ($menuItems as $item)
            <li
                class="py-2 flex items-center justify-start px-6 text-yellow-800 hover:text-yellow-600 hover:bg-gray-100 hover:rounded-l-[18px]">
                <a class="w-full" href="{{ $item['url'] }}"><i class="fa {{ $item['icon'] }} mr-3"
                        aria-hidden="true"></i><span class="hidden md:inline-flex">{{ $item['label'] }}</span></a>
            </li>
        @endforeach
        <i class="fa fa-address-book" aria-hidden="true"></i>
        con
        <h2 class="px-6 py-2 text-yellow-600 font-semibold">Members</h2>
        @foreach ($memberMenuItems as $item)
            <li
                class="py-2 flex items-center justify-start px-6 text-yellow-800 hover:text-yellow-600 hover:bg-gray-100 hover:rounded-l-[18px]">
                <a class="w-full" href="{{ $item['url'] }}"><i class="fa {{ $item['icon'] }} mr-3"
                        aria-hidden="true"></i><span class="hidden md:inline-flex">{{ $item['label'] }}</span></a>
            </li>
        @endforeach
    </ul>
</div>
{{-- <a href="/home" class="w-full"> <i class="fa fa-home mr-3" aria-hidden="true"></i> Home</a> --}}
