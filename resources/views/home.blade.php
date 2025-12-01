@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#0E0E12] text-white">

    {{-- Navbar --}}
    <header class="w-full py-4 border-b border-gray-800">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-xl font-semibold">🎬 CineMagic</h1>
            <div class="flex items-center gap-4">
                <div class="relative">
                    <input type="text" placeholder="Search"
                        class="bg-gray-800 text-sm rounded-lg px-4 py-2 pl-10 focus:ring-2 focus:ring-purple-500 outline-none">
                    <i class="absolute left-3 top-2.5 text-gray-400 fa fa-search"></i>
                </div>
                <i class="fa fa-bell text-xl text-gray-300"></i>
                <img src="https://i.pravatar.cc/40" class="w-8 h-8 rounded-full" alt="">
            </div>
        </div>
    </header>

    <div class="container mx-auto px-4 mt-6">

        {{-- Banner --}}
        <div class="w-full overflow-hidden rounded-xl">
            <img src="/images/banner.jpg" class="w-full rounded-xl object-cover h-60">
        </div>

        {{-- Kategori --}}
        <div class="flex gap-3 mt-6 flex-wrap">
            @foreach (['All','Action','Comedy','Drama','Sci-Fi','Thriller'] as $item)
                <button class="px-4 py-1.5 rounded-full bg-gray-800 text-gray-300 hover:bg-purple-600 hover:text-white transition">
                    {{ $item }}
                </button>
            @endforeach
        </div>

        {{-- Now Showing --}}
        <h2 class="mt-10 text-xl font-bold">Now Showing</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mt-4">

            {{-- Card Film 1 --}}
            <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden">
                <img src="/images/movie1.jpg" class="h-64 w-full object-cover">
                <div class="p-3">
                    <h3 class="font-semibold">The Cosmic Odyssey</h3>
                    <p class="text-xs text-gray-400 mt-1">PG-13</p>
                </div>
            </div>

            {{-- Card Film 2 --}}
            <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden">
                <img src="/images/movie2.jpg" class="h-64 w-full object-cover">
                <div class="p-3">
                    <h3 class="font-semibold">Echoes of the Past</h3>
                    <p class="text-xs text-gray-400 mt-1">PG</p>
                </div>
            </div>

            {{-- Card Film 3 --}}
            <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden">
                <img src="/images/movie3.jpg" class="h-64 w-full object-cover">
                <div class="p-3">
                    <h3 class="font-semibold">Neon City Nights</h3>
                    <p class="text-xs text-gray-400 mt-1">R</p>
                </div>
            </div>

            {{-- Card Film 4 --}}
            <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden">
                <img src="/images/movie4.jpg" class="h-64 w-full object-cover">
                <div class="p-3">
                    <h3 class="font-semibold">Whispers of the Deep</h3>
                    <p class="text-xs text-gray-400 mt-1">PG-13</p>
                </div>
            </div>
        </div>

        {{-- Classic Re-release --}}
        <h2 class="mt-12 text-xl font-bold">Classic Re-releases</h2>

        <div class="bg-gray-900 rounded-xl flex flex-col md:flex-row mt-4 overflow-hidden">
            <img src="/images/classic.jpg" class="w-full md:w-1/3 object-cover">

            <div class="p-6 flex flex-col justify-center">
                <h3 class="text-lg font-semibold">The Timeless Tale</h3>
                <p class="text-gray-300 text-sm mt-2 max-w-md">
                    Relive the magic of this cinematic masterpiece, now back on the big screen.
                    Experience the story that captivated generations.
                </p>

                <button class="mt-4 bg-purple-600 hover:bg-purple-700 px-4 py-2 rounded-lg text-sm font-semibold w-max">
                    View Details
                </button>
            </div>
        </div>

        {{-- Footer --}}
        <footer class="text-gray-400 text-sm mt-16 py-10 border-t border-gray-800">
            <div class="flex justify-center gap-6 mb-4">
                <a href="#" class="hover:text-white">About Us</a>
                <a href="#" class="hover:text-white">Contact</a>
                <a href="#" class="hover:text-white">FAQ</a>
                <a href="#" class="hover:text-white">Privacy Policy</a>
            </div>

            <p class="text-center">©2024 CineMagic. All rights reserved.</p>
        </footer>

    </div>
</div>
@endsection
