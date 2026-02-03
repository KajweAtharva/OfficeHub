<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OfficeHub</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="bg-black text-white min-h-screen flex flex-col">

<!-- NAVBAR -->
<header class="bg-emerald-900 h-20 flex items-center justify-between px-10">
    <div></div>

    <h1 class="text-4xl font-light tracking-wide">
        OfficeHub
    </h1>

    @auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="bg-emerald-950 px-6 py-3 rounded-2xl text-lg hover:bg-emerald-800 transition">
            Logout
        </button>
    </form>
    @endauth
</header>

<!-- MAIN CONTENT -->
<main class="flex-grow px-6 py-10">
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="bg-zinc-800 text-center py-6 text-sm">
    <p>OfficeHub</p>
    <p>© 2026 OfficeHub. All rights reserved.</p>
    <div class="space-x-6 mt-2">
        <a href="#" class="hover:underline">Privacy</a>
        <a href="#" class="hover:underline">Terms</a>
        <a href="#" class="hover:underline">Support</a>
    </div>
</footer>

@stack('scripts')
</body>
</html>
