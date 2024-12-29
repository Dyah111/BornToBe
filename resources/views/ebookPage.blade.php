<x-app-layout>
    <div class="flex justify-center items-center mt-16 py-6 ">
        <h1 class="text-5xl font-bold text-center">E-book</h1>
    </div>
    <div class="grid grid-cols-3 gap-3 mt-10 p-2">
        <x-card-ebook :poster="asset('img/book.png')" :link="'https://www.example.com'">
            
        </x-card-ebook>          
        <x-card-ebook :poster="asset('img/book.png')" :link="'https://www.example.com'">
            
        </x-card-ebook>          
        <x-card-ebook :poster="asset('img/book.png')" :link="'https://www.example.com'">
            
        </x-card-ebook>          
        <x-card-ebook :poster="asset('img/book.png')" :link="'https://www.example.com'">
            
        </x-card-ebook>          
        <x-card-ebook :poster="asset('img/book.png')" :link="'https://www.example.com'">
            
        </x-card-ebook>          
        <x-card-ebook :poster="asset('img/book.png')" :link="'https://www.example.com'">
            
        </x-card-ebook>          
    </div>
</x-app-layout>
