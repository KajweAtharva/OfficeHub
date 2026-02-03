<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OfficeHub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-zinc-900 rounded-3xl shadow-2xl p-10">
        {{ $slot }}
    </div>

</body>
</html>
