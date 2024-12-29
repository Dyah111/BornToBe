@props(['poster', 'link'])
<div class="max-w-sm flex flex-col rounded-md shadow-md">
    <div class="w-full h-auto bg-[#EACDBD] ">
        <img src="{{ $poster }}" alt="Poster" class="w-full h-auto object-cover rounded-md">
    </div>
    <div class="bg-white p-4 flex justify-center space-x-2">
        <a href="{{ route('read') }}"
            class="text-2xl font-bold bg-blue-500 text-white px-4 py-2 rounded-md inline-block text-center">
            Baca
        </a>
    
        <a href="{{ route('buy') }}"
            class="text-2xl font-bold bg-blue-500 text-white px-4 py-2 rounded-md inline-block text-center">
            Beli
        </a>
    </div>
    
</div>
