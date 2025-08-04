<nav class="bg-white shadow-sm border-b">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-xl font-semibold text-blue-600">
            MyApp
        </a>

        <div class="flex items-center space-x-4">
            @auth
                <span class="text-sm text-gray-700">
                    Welcome, {{ auth()->user()->name }}
                </span>

                <a href="{{ route('profile') }}" class="text-sm text-blue-500 hover:underline">
                    Profile
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-red-500 hover:underline">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:underline">
                    Login
                </a>

                <a href="{{ route('register') }}" class="text-sm text-gray-700 hover:underline">
                    Register
                </a>
            @endauth
        </div>
    </div>
</nav>
    