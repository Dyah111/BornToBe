
@props(['poster', 'link'])
<div class="max-w-sm flex flex-col rounded-md shadow-md">
    <div class="w-full h-auto bg-[#EACDBD] ">
        <img 
            src="{{ $poster }}" 
            alt="Poster" 
            class="w-full h-auto object-cover rounded-md"
        >
    </div>
    <div class="bg-white p-4 flex justify-center">
        <a 
            href="{{ $link }}"
            class="text-2xl font-bold bg-blue-500 text-white px-4 py-2 rounded-md inline-block text-center"
        >
            Detail
        </a>
    </div>
</div>
