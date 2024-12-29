<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class=" flex flex-wrap h-screen p-4 gap-10 justify-center items-start">
        <a href="{{ url('/beasiswaPage') }}" class="flex flex-col w-full md:w-1/2 lg:w-1/3 h-1/3 bg-blue-300 shadow-md rounded-2xl transform transition-transform duration-200 hover:scale-105 p-6">     
            <div class="flex flex-col justify-center w-full h-full items-center">
                <img src="{{ asset('img/Beasiswa.png') }}" alt="" class="w-24">
                <h1 class="font-bold text-4xl">Beasiswa</h1>
            </div>
        </a>
        <a href="{{ url('/lombaPage') }}" class="flex flex-col w-full md:w-1/2 lg:w-1/3 h-1/3 bg-green-300 shadow-md rounded-2xl transform transition-transform duration-200 hover:scale-105 p-6">     
            <div class="flex flex-col justify-center w-full h-full items-center">
                <img src="{{ asset('img/Lomba.png') }}" alt="" class="w-24">
                <h1 class="font-bold text-4xl">Lomba</h1>
            </div>
        </a>
        @if(auth()->user()->is_premium)
            <a href="{{ url('/testMBTIPage') }}" class="flex flex-col w-full md:w-1/2 lg:w-1/3 h-1/3 bg-red-200 shadow-md rounded-2xl transform transition-transform duration-200 hover:scale-105 p-6">     
                <div class="flex flex-col justify-center w-full h-full items-center">
                    <img src="{{ asset('img/Test mbti.png') }}" alt="" class="w-24">
                    <h1 class="font-bold text-4xl">Test MBTI</h1>
                </div>
            </a>
        {{-- @endif --}}
        <a href="{{ url('/webinarPage') }}" class="flex flex-col w-full md:w-1/2 lg:w-1/3 h-1/3 bg-orange-200 shadow-md rounded-2xl transform transition-transform duration-200 hover:scale-105 p-6">     
            <div class="flex flex-col justify-center w-full h-full items-center">
                <img src="{{ asset('img/Webinar.png') }}" alt="" class="w-24">
                <h1 class="font-bold text-4xl">Webinar</h1>
            </div>
        </a>
        
        {{-- @if(auth()->user()->is_premium) --}}
            <a href="{{ url('/bootcampPage') }}" class="flex flex-col w-full md:w-1/2 lg:w-1/3 h-1/3 bg-purple-300 shadow-md rounded-2xl transform transition-transform duration-200 hover:scale-105 p-6">     
                <div class="flex flex-col justify-center w-full h-full items-center">
                    <img src="{{ asset('img/software.png') }}" alt="" class="w-24">
                    <h1 class="font-bold text-4xl">Bootcamp</h1>
                </div>
            </a>
            {{-- <a href="{{ url('/ebookPage') }}" class="flex flex-col w-full md:w-1/2 lg:w-1/3 h-1/3 bg-yellow-300 shadow-md rounded-2xl transform transition-transform duration-200 hover:scale-105 p-6">     
                <div class="flex flex-col justify-center w-full h-full items-center">
                    <img src="{{ asset('img/book.png') }}" alt="" class="w-24">
                    <h1 class="font-bold text-4xl">E-Book</h1>
                </div>
            </a> --}}
        @endif
        
    </div>
</x-app-layout>
