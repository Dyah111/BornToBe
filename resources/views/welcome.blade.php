<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- tailwind css --}}
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"/>
    </head>
    <body class="bg-gray-200">
       <x-navbar/>
       <div class="flex h-screen w-full">
            <div class="flex-1 flex p-20 flex-col justify-center gap-8">
              <div class="text-5xl font-bold">
                <h1>Welcome To</h1>
                <h1>BornToBe!</h1>
              </div>
              <div class="text-2xl">
                <p>
                    Temukan berbagai macam beasiswa, webinar / seminar, dan lomba serta ikuti test MBTI untuk mengetahui kemampuan diri kamu!
                </p>
              </div>
              <div>
                <a href="{{ url('/login') }}" class="p-3 bg-blue-500 rounded-md font-sans font-semibold text-white hover:bg-blue-600">Get Started</a>
              </div>
            </div>      
            <div class="flex-1 flex justify-center items-center">
                <img src="{{ asset('img/homepage.png') }}">
            </div>
        </div>
    </body>
</html>
