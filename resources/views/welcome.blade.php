<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineMagic</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0f0f14] text-white">

<!-- NAVBAR -->
<nav class="w-full px-6 py-4 flex justify-between items-center bg-black/40 backdrop-blur">
    <h1 class="text-xl font-bold">🎬 CineMagic</h1>

    <div class="flex items-center gap-4">
        <a href="{{ route('login') }}" class="text-sm px-4 py-2 bg-purple-600 rounded-lg">Login</a>
        <a href="{{ route('register') }}" class="text-sm px-4 py-2 bg-gray-700 rounded-lg">Register</a>
    </div>
</nav>

<!-- BANNER -->
<div class="w-full h-[300px] bg-cover bg-center mt-4 rounded-xl mx-auto max-w-5xl"
     style="background-image: url('https://images.unsplash.com/photo-1524985069026-dd778a71c7b4');">
</div>

<!-- FILTER GENRE -->
<div class="max-w-5xl mx-auto mt-6 flex gap-3">
    <button class="px-4 py-1 bg-gray-700 rounded-full">All</button>
    <button class="px-4 py-1 bg-gray-700 rounded-full">Action</button>
    <button class="px-4 py-1 bg-gray-700 rounded-full">Comedy</button>
    <button class="px-4 py-1 bg-gray-700 rounded-full">Drama</button>
</div>

<!-- NOW SHOWING -->
<div class="max-w-5xl mx-auto mt-10">
    <h2 class="text-xl font-semibold mb-4">Now Showing</h2>

    <div class="grid grid-cols-4 gap-6">
        @foreach($films as $film)
        <div class="bg-gray-800 p-2 rounded-xl hover:scale-105 transition">
            <img src="{{ asset('storage/' . $film->poster) }}" class="w-full h-56 object-cover rounded-lg">
            <p class="mt-2 font-semibold">{{ $film->judul }}</p>
            <p class="text-sm text-gray-400">{{ $film->rating ?? 'PG-13' }}</p>
        </div>
        @endforeach
    </div>
</div>

<!-- FOOTER -->
<footer class="text-center mt-16 py-6 text-gray-400 text-sm">
    ©2024 CineMagic. All rights reserved.
</footer>

</body>
</html>
