
@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white shadow p-6 rounded">
    <h2 class="text-2xl font-semibold mb-4">Register</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- Username --}}
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1" for="username">Username</label>
            <input type="text" name="username" id="username"
                   value="{{ old('username') }}"
                   class="w-full border rounded px-3 py-2"
                   required autofocus>
            @error('username') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        {{-- Email --}}
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1" for="email">Email</label>
            <input type="email" name="email" id="email"
                   value="{{ old('email') }}"
                   class="w-full border rounded px-3 py-2"
                   required>
            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        {{-- Password --}}
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1" for="password">Password</label>
            <input type="password" name="password" id="password"
                   class="w-full border rounded px-3 py-2"
                   required>
            @error('password') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        {{-- Confirm Password --}}
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1" for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        {{-- Usertype --}}
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Register As</label>
            <select name="usertype" class="w-full border rounded px-3 py-2" required>
                <option value="">Select one</option>
                <option value="driver" {{ old('usertype') == 'driver' ? 'selected' : '' }}>Driver</option>
                <option value="customer" {{ old('usertype') == 'customer' ? 'selected' : '' }}>Customer</option>
            </select>
            @error('usertype') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        {{-- Submit --}}
        <div class="mt-6">
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                Register
            </button>
        </div>
    </form>
</div>
@endsection
    