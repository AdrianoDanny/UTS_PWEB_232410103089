<nav class="bg-blue-600 text-white shadow-lg">
    <div class="container mx-auto px-4 py-3">
        <div class="flex justify-between items-center">
            <a href="{{ route('login') }}" class="text-xl font-bold">UTS PWEB</a>

            <div class="hidden md:flex space-x-6">
                <a href="{{ route('dashboard') }}" class="hover:text-blue-200 transition">Dashboard</a>
                <a href="{{ route('pengelolaan') }}" class="hover:text-blue-200 transition">Pengelolaan</a>
                <a href="{{ route('profile') }}" class="hover:text-blue-200 transition">Profile</a>
            </div>
        </div>
    </div>
</nav>
