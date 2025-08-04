@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-6 text-blue-600">Welcome to {{ config('app.name') }}</h1>

        <p class="text-lg text-gray-700 mb-8">
            Your Laravel 12 app with Fortify auth and Tailwind styling is ready to go.
        </p>

        @guest
            <div class="space-x-4">
                <a href="{{ route('login') }}"
                   class="inline-block px-5 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   class="inline-block px-5 py-2 bg-gray-100 text-blue-600 rounded hover:bg-gray-200 transition">
                    Register
                </a>
            </div>
        @else
            <p class="text-green-600 font-medium">
                You're logged in as <strong>{{ auth()->user()->username }}</strong>
                ({{ auth()->user()->usertype }}).
            </p>

            <a href="{{ route('profile') }}"
               class="inline-block mt-4 px-5 py-2 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 transition">
                Go to Profile
            </a>
        @endguest
    </div>
@endsection
