<div>
    <div class="w-full bg-white flex justify-between px-20 py-5 items-center fixed">
        <div class="ml-10">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-24 px">
        </div>
        <div class="flex justify-between gap-5 text-xl">
            <a href="{{ url('/login') }}" class="text-black hover:text-red-400 font-semibold ">Login</a>
            <a href="{{ url('/register') }}" class="text-black hover:text-red-400 font-semibold">Register</a>
        </div>
    </div>
</div>
