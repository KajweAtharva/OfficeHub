<x-guest-layout>
    <h1 class="text-3xl font-semibold text-center mb-8">Create Account</h1>

    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <input type="text" name="name" placeholder="Full Name"
               class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3"
               required>

        <input type="email" name="email" placeholder="Email"
               class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3"
               required>

        <input type="password" name="password" placeholder="Password"
               class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3"
               required>

        <input type="password" name="password_confirmation" placeholder="Confirm Password"
               class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3"
               required>

        <button class="w-full bg-emerald-700 hover:bg-emerald-600 py-3 rounded-xl transition">
            Register
        </button>

        <p class="text-center text-sm text-gray-400">
            Already have an account?
            <a href="{{ route('login') }}" class="text-emerald-400 hover:underline">
                Login
            </a>
        </p>
    </form>
</x-guest-layout>
