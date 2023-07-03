<div class="sidebar px-6 py-4">
    <h2 class="text-white font-bold mb-4">{{ $title }}</h2>
    <ul>
        <li class="{{ $isActive('/home') ? 'bg-slate-400' : 'bg-slate-400' }}"><a href="/home">Home</a></li>
        <li class="{{ $isActive('/about') ? 'active' : '' }}"><a href="/about">About</a></li>
        <li class="{{ $isActive('/contact') ? 'active' : '' }}"><a href="/contact">Contact</a></li>
    </ul>
    <!-- Sidebar content here -->
</div>
