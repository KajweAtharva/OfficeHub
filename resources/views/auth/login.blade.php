<x-guest-layout>
    <h1 class="text-3xl font-semibold text-center mb-8">Login</h1>

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <input type="email" name="email" placeholder="Email"
               class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3"
               required autofocus>

        <input type="password" name="password" placeholder="Password"
               class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3"
               required>

        <button class="w-full bg-emerald-700 hover:bg-emerald-600 py-3 rounded-xl transition">
            Login
        </button>

        <p class="text-center text-sm text-gray-400">
            Don’t have an account?
            <a href="{{ route('register') }}" class="text-emerald-400 hover:underline">
                Register
            </a>
        </p>
    </form>
</x-guest-layout>
