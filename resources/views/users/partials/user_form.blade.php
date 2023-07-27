<div class="w-full mb-2">
    <div class="flex items-center">
        <input type="text" name="first_name" placeholder="First Name"
            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" value="{{ old('first_name') }}" />
    </div>
    @if ($errors->has('first_name'))
        <span class="text-sm text-red-400">{{ $errors->first('first_name') }}</span>
    @endif
</div>

<div class="w-full mb-2">
    <div class="flex items-center">
        <input type="text" name="last_name" placeholder="Last Name"
            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" value="{{ old('last_name') }}" />
    </div>
    @if ($errors->has('last_name'))
        <span class="text-sm text-red-400">{{ $errors->first('last_name') }}</span>
    @endif
</div>

<div class="w-full mb-2">
    <div class="flex items-center">
        <input type="email" name="email" placeholder="Email"
            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" value="{{ old('email') }}" />
    </div>
    @if ($errors->has('email'))
        <span class="text-sm text-red-400">{{ $errors->first('email') }}</span>
    @endif
</div>

<div class="w-full mb-2">
    <div class="flex items-center">
        <input type="text" name="phone_no" placeholder="Phone Number"
            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" value="{{ old('phone_no') }}" />
    </div>
    @if ($errors->has('phone_no'))
        <span class="text-sm text-red-400">{{ $errors->first('phone_no') }}</span>
    @endif
</div>

<div class="w-full mb-2">
    <div class="flex items-center">
        <input type="password" name="password" placeholder="Password"
            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" value="{{ old('password') }}" />
    </div>
    @if ($errors->has('password'))
        <span class="text-sm text-red-400">{{ $errors->first('password') }}</span>
    @endif
</div>

<div class="w-full mb-2">
    <div class="flex items-center">
        <input type="file" name="avatar" placeholder="Avatar"
            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" value="{{ old('avatar') }}" />
    </div>
    @if ($errors->has('avatar'))
        <span class="text-sm text-red-400">{{ $errors->first('avatar') }}</span>
    @endif
</div>

<div class="w-full mb-2">
    <div class="flex items-center">
        <select name="user_role" class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none">
            <option value="admin">Admin</option>
            <option value="user">User</option>
            <option value="finance">Finance</option>
        </select>
    </div>
    @if ($errors->has('user_role'))
        <span class="text-sm text-red-400">{{ $errors->first('user_role') }}</span>
    @endif
</div>
