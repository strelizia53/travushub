@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto bg-white shadow p-6 rounded">
        <h2 class="text-2xl font-semibold mb-4 text-center">Login</h2>

        {{-- Display global auth error (wrong credentials, etc.) --}}
        @if(session('status'))
            <div class="mb-4 text-green-600 text-sm font-medium text-center">
                {{ session('status') }}
            </div>
        @endif

        @if($errors->has('login') || $errors->has('email'))
            <div class="mb-4 text-red-600 text-sm font-medium text-center">
                {{ $errors->first('login') ?? $errors->first('email') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- Email --}}
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-1">Email</label>
                <input type="email" name="email" id="email"
                    value="{{ old('email') }}"
                    class="w-full border rounded px-3 py-2"
                    required autofocus>
                @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Password --}}
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium mb-1">Password</label>
                <input type="password" name="password" id="password"
                       class="w-full border rounded px-3 py-2"
                       required>
                @error('password') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Submit --}}
            <div class="mt-6">
                <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                    Login
                </button>
            </div>
        </form>
    </div>
@endsection
